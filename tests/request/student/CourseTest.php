<?php

use App\Eloquent\User;
use App\Model\Util\HttpStatus;
use Tests\TestCase;

/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 4:22 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class CourseTest extends TestCase
{
    public function test_it_should_fail_create_new_course_due_to_uncomplete_profile()
    {
        $user    = \App\Eloquent\User::where('credential', '10000')->first()->toArray();
        $profile = \App\Eloquent\UserStudents::where('user', $user['id'])->first()->toArray();
        \App\Eloquent\UserStudents::where('user', $user['id'])->update(['school' => null, 'grade' => null]);
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('POST', '/student/course/create',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        \App\Eloquent\UserStudents::where('user', $user['id'])->update(['school' => $profile['school'], 'grade' => $profile['grade']]);
        echo vj($response->content());
    }

    /**
     * @param null $creds
     * @return array
     */
    private function auth($creds = null)
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/login',
            $creds == null ? [
                'credential' => '10000',
                'password' => '12345678'
            ] : $creds,
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);

        return json_decode($response->content(), true);
    }

    public function test_it_should_fail_create_new_course_due_to_unresolved_previous_course()
    {
        $token    = $this->auth();
        $response = $this->json('POST', '/student/course/create',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_create_new_course_due_to_never_do_course()
    {
        /** @var $response */
        /** @var User $userE */
        $userE   = \App\Eloquent\User::where('credential', '10001')->first();
        $answers = $userE->{'answer'}->pluck('id')->all();

        /** @var $response */
        $token    = $this->auth([
            'credential' => '10001',
            'password' => '12345678'
        ]);
        $response = $this->json('POST', '/student/course/create',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        \App\Eloquent\Answer::where('user', $userE->{'id'})->whereNotIn('id', $answers)->delete();
        echo vj($response->content());
    }

    public function test_it_should_success_create_new_course_due_to_finished_course()
    {
        $userE   = \App\Eloquent\User::where('credential', '10000')->first();
        $answers = $userE->{'answer'}->toArray();
        /** @var $response */
        \App\Eloquent\Answer::where('user', $userE->{'id'})->whereIn('id', array_pluck($answers, 'id'))->update(['finished_at' => \Carbon\Carbon::now()]);
        $token    = $this->auth();
        $response = $this->json('POST', '/student/course/create',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        \App\Eloquent\Answer::where('user', $userE->{'id'})->whereNotIn('id', array_pluck($answers, 'id'))->delete();
        foreach ($answers as $answer)
        {
            \App\Eloquent\Answer::where('id', $answer['id'])->update(array_except($answer, ['id', 'user']));
        }
        echo vj($response->content());
    }

    public function test_it_should_fail_answer_due_to_unanswered()
    {
        $token    = $this->auth();
        $response = $this->json('PATCH', '/student/course/start/11',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_fail_answer_due_wrong_question()
    {
        $token    = $this->auth();
        $response = $this->json('PATCH', '/student/course/start/100',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_fail_answer_due_no_opened_course()
    {
        $token    = $this->auth([
            'credential' => '10001',
            'password' => '12345678'
        ]);
        $response = $this->json('PATCH', '/student/course/start/100',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_fail_answer_due_to_wrong_answer_options()
    {
        $token    = $this->auth();
        $response = $this->json('PATCH', '/student/course/start/11',
            [
                'answer' => 'this-is-invalid-answer'
            ],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_answer()
    {
        $qval = 11;
        /** @var User $userE */
        $userE   = \App\Eloquent\User::where('credential', '10000')->first();
        $answers = $userE->GetAnswerDetail($qval)->getAttributes();
        $token   = $this->auth();
        try
        {
            $response = $this->json('PATCH', "/student/course/start/$qval",
                [
                    'answer' => 'c9c18fb0-ab08-4715-a29d-5664fcbad88b'
                ],
                [
                    'Accept' => 'application/json',
                    'Authorization' => "Bearer {$token['data']['token']}"
                ]);
            $response->assertJson([
                'code' => HttpStatus::OK,
            ]);
        }
        finally
        {
            \App\Eloquent\AnswerDetail::where('id', $answers['id'])->update(array_except($answers, ['id']));
        }
        echo vj($response->content());
    }

    public function test_it_should_fail_submit_due_no_opened_course()
    {
        $token    = $this->auth([
            'credential' => '10001',
            'password' => '12345678'
        ]);
        $response = $this->json('POST', '/student/course/submit',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_fail_submit_due_no_unfinished_work()
    {
        $token    = $this->auth();
        $response = $this->json('POST', '/student/course/submit',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::FORBIDDEN,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_submit()
    {
        /** @var User $userE */
        /** @var \Illuminate\Support\Collection $questionsE */
        /** @var \App\Eloquent\Answer $answerE */
        $userE      = \App\Eloquent\User::where('credential', '10000')->first();
        $questionsE = $userE->{'answer'}->where('finished_at', null)->first()->answer_detail()->whereNull('answer')->get();
        $questionsA = $questionsE->toArray();
        $answerE    = $userE->{'answer'}->where('finished_at', null)->first();
        $answerA    = $answerE->toArray();

        foreach ($questionsE as $qu)
        {
            \App\Eloquent\AnswerDetail::where('id', $qu['id'])->update([
                'answer' => 'a4601425-a340-4bde-b0e9-ca423becce07',
                'favour' => '27d48b87-e04e-4dab-8cbf-18abbee49279',
                'scale' => '4',
                'answered_at' => \Carbon\Carbon::now(),
            ]);
        }

        try
        {
            $token    = $this->auth();
            $response = $this->json('POST', '/student/course/submit',
                [],
                [
                    'Accept' => 'application/json',
                    'Authorization' => "Bearer {$token['data']['token']}"
                ]);
            $response->assertJson([
                'code' => HttpStatus::OK,
            ]);
        }
        finally
        {
            foreach ($questionsA as $qu)
            {
                //\App\Eloquent\AnswerDetail::where('id', $qu['id'])->update(array_except($qu, ['id']));
            }
            //\App\Eloquent\Answer::where('id', $answerA['id'])->update(array_except($answerA, ['id']));
        }

        echo vj($response->content());
    }


}

?>
