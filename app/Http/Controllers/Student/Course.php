<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 4:20 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Controllers\Student;


use App\Eloquent\Answer;
use App\Eloquent\AnswerDetail;
use App\Eloquent\AnswerResult;
use App\Eloquent\Question;
use App\Eloquent\QuestionCategory;
use App\Eloquent\QuestionOption;
use App\Eloquent\User;
use App\Eloquent\UserStudents;
use App\Http\Controllers\Controller;
use App\Http\Utils\Order\Generation\ShuffledGeneration;
use App\Model\AnswerResultCalculator;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\JWTAuth;

class Course extends Controller
{
    use AnswerResultCalculator;
    use ShuffledGeneration;

    /**
     * @param Request $request
     * @param JWTAuth $auth
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function create(Request $request, JWTAuth $auth)
    {
        /** @var User $user */
        $user = \Illuminate\Support\Facades\Auth::guard('api')->user();

        $questionCategories = Question::where('active', '=', true)->distinct()->pluck('category');
        $questions          = $this->generateCourseOrder();

        $answer                 = new Answer();
        $answer->{'id'}         = Uuid::uuid4()->toString();
        $answer->{'started_at'} = Carbon::now();
        $user->answer()->save($answer);

        DB::transaction(function () use ($questionCategories, $answer, $questions) {
            $details    = [];
            $categories = [];
            foreach ($questions as $question)
            {
                $answerDetail               = new AnswerDetail();
                $answerDetail->{'id'}       = Uuid::uuid4()->toString();
                $answerDetail->{'question'} = $question['id'];
                $answerDetail->{'order'}    = $question['order'];
                array_push($details, $answerDetail);
            }
            foreach ($questionCategories as $questionCategory)
            {
                $answerResult               = new AnswerResult();
                $answerResult->{'id'}       = Uuid::uuid4()->toString();
                $answerResult->{'category'} = $questionCategory;
                array_push($categories, $answerResult);
            }
            $answer->answer_detail()->saveMany($details);
            $answer->answer_result()->saveMany($categories);

        });

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Generate Kuis Berhasil, Selamat Mengerjakan'), HttpStatus::OK);
    }

    /**
     * @param JWTAuth $auth
     * @param int $question
     * @return mixed
     */
    public function startEdit(JWTAuth $auth, $question)
    {
        /** @var User $user */
        $user     = \Illuminate\Support\Facades\Auth::guard('api')->user();
        $question = intval($question);
        $answers  = $user->{'answer'}->where('finished_at', null)->first()->answer_detail()->whereBetween('order', [$question - 1, $question + 1])->select('id', 'question', 'order', 'answer')->get()->toArray();
        $prev     = null;
        $next     = null;

        /** @var Answer $answer */
        foreach ($answers as $answer)
        {
            $answer_question = intval($answer['order']);
            if ($answer_question === ($question - 1))
            {
                $prev = $answer;
            }
            else if ($answer_question === ($question))
            {
                $current = $answer;
            }
            else if ($answer_question === ($question + 1))
            {
                $next = $answer;
            }
        }
        unset($answers);

        $question   = Question::where('id', '=', $current['question'])->select('id', 'question')->first();
        $options    = QuestionOption::orderBy('order')->select('id', 'description')->get()->toArray();
        $navigation = $user->{'answer'}->where('finished_at', null)->first()->answer_detail()->orderBy('order')->select(['order', 'question', 'answer'])->get()->map(function ($v) use ($current) {
            return ['no' => $v->{'order'}, 'answer' => $v->{'answer'}, 'status' => is_null($v->{'answer'}) ? ($v->{'question'} == $current['question'] ? 2 : 0) : ($v->{'question'} == $current['question'] ? 2 : 1)];
        })->toArray();
        $summary  = [
            'answered' => count(array_filter($navigation, function ($v) { return !is_null($v['answer']); })),
            'total' => count($navigation)
        ];
        foreach ($navigation as &$nav)
        {
            unset($nav['answer']);
        }

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, '', compact('prev', 'current', 'next', 'question', 'options', 'summary', 'navigation')), HttpStatus::OK);
    }

    /**
     * @param JWTAuth $auth
     * @param int $question
     * @return mixed
     */
    public function navigation(JWTAuth $auth, $question)
    {
        /** @var User $user */
        $user    = \Illuminate\Support\Facades\Auth::guard('api')->user();
        $current = $user->GetAnswerDetail(intval($question))->toArray();
        $summary = $user->{'answer'}->where('finished_at', null)->first()->answer_detail()->orderBy('order')->select(['order', 'question', 'answer'])->get()->map(function ($v) use ($current) {
            return ['no' => $v->{'order'}, 'status' => is_null($v->{'answer'}) ? 0 : ($v->{'question'} == $current['question'] ? 2 : 1)];
        });

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, '', compact('summary')), HttpStatus::OK);
    }

    /**
     * @param Request $request
     * @param JWTAuth $auth
     * @param int $question
     * @return mixed
     */
    public function startUpdate(Request $request, JWTAuth $auth, $question)
    {
        $credentials = $this->validate($request, [
            'answer' => 'bail|required|exists:question_options,id',
        ]);
        $qval        = intval($question);
        /** @var User $user */
        $user = \Illuminate\Support\Facades\Auth::guard('api')->user();
        /** @var AnswerDetail $answer */
        $answer = $user->GetAnswerDetail($qval);

        /** @var Question $question */
        $question           = Question::where('id', $answer->{'question'})->first();
        $scale              = QuestionOption::all()->count();
        $answer->{'answer'} = $credentials['answer'];
        $answer->{'favour'} = $question->{'favour'};
        $answer->{'scale'}  = $scale;
        if (is_null($answer->{'answered_at'}))
        {
            $answer->{'answered_at'} = Carbon::now();
        }
        else
        {
            $answer->{'updated_at'} = Carbon::now();
        }
        $answer->save();

        $next = $user->GetAnswerDetail($qval + 1);

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Jawaban Berhasil disimpan', ['next' => $next == null ? null : ($qval + 1)]), HttpStatus::OK);
    }

    public function submit(Request $request)
    {
        /**
         * @var Answer $answer
         * @var UserStudents $student
         */
        $answer  = \Tymon\JWTAuth\Facades\JWTAuth::user()->{'answer'}->where('finished_at', null)->first();
        $student = \Tymon\JWTAuth\Facades\JWTAuth::user()->student()->first();
        $this->calculate($answer);
        $answer->setAttribute('finished_at', Carbon::now());
        $student->setAttribute('active', false);

        $student->save();
        $answer->save();

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Pengerjaan telah selesai, Terima Kasih'), HttpStatus::OK);
    }

    public function result(JWTAuth $auth)
    {
        /** @var User $user */
        $user       = \Illuminate\Support\Facades\Auth::guard('api')->user();
        $categories = QuestionCategory::orderBy('order')->get();
        $answers    = $user->answer()->orderBy('started_at')->get()->toArray();
        foreach ($answers as &$a)
        {
            $a['result'] = AnswerResult::where('answer_code', $a['id'])->get()->mapWithKeys(function ($item) {
                return [$item['category'] => $item->toArray()];
            });
        }


        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, '', compact('categories', 'answers')), HttpStatus::OK);
    }
}

?>
