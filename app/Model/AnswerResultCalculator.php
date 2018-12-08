<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 02 December 2018, 6:53 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Model;


use App\Eloquent\Answer;
use App\Eloquent\AnswerDetail;
use App\Eloquent\AnswerResult;
use App\Eloquent\Question;
use Illuminate\Support\Facades\DB;

trait AnswerResultCalculator
{
    public function calculate(Answer $answer)
    {
        /** @var AnswerResult $answer_results */
        $answer_results = $answer->{'answer_result'};
        /** @var AnswerDetail $answer_scope */
        $answer_scope = AnswerDetail::where('answer_code', '=', $answer->{'id'})->get([DB::raw("COUNT(`answer_details`.`id`) AS 'count'"), DB::raw("MAX(`answer_details`.`scale`) AS 'max'")])->first();
        /** @var AnswerResult $answer_result */
        foreach ($answer_results as $answer_result)
        {
            $answer_details = AnswerDetail::where('answer_code', '=', $answer->{'id'})->whereIn('question', Question::where('category', '=', $answer_result->{'category'})->pluck('id'))->get();
            $result         = 0.0;
            /** @var AnswerDetail $answer_detail */
            foreach ($answer_details as $answer_detail)
            {
                $result += is_null($answer_detail->{'answer'}) ? 0 : (intval($answer_detail->{'favour'}) === 1 ? doubleval($answer_detail->{'answer'}) : (doubleval($answer_detail->{'scale'}) - doubleval($answer_detail->{'answer'}) + 1));
            }
            try
            {
                $result *= 100.0 / (doubleval($answer_scope->{'count'}) * doubleval($answer_scope->{'max'}));
            }
            catch (\ErrorException $e)
            {
                $result = 0;
            }
            $answer_result->{'result'} = $result;
            $answer_result->save();
        }
    }
}

?>
