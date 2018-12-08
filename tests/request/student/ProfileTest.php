<?php

use App\Model\Util\HttpStatus;
use Tests\TestCase;

/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 2:51 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class ProfileTest extends TestCase
{
    public function test_it_should_fail_update_profile_missing_required_data()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('PATCH', '/student/profile',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNPROCESSABLE_ENTITY,
        ]);
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

    public function test_it_should_success_update_profile()
    {
        /** @var $response */
        $user     = \App\Eloquent\User::where('credential', '10000')->first()->toArray();
        $profile  = \App\Eloquent\UserStudents::where('user', $user['id'])->first()->toArray();
        $token    = $this->auth();
        $response = $this->json('PATCH', '/student/profile',
            [
                'school' => 'UM',
                'grade' => '10'
            ],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        \App\Eloquent\UserStudents::where('id', $profile['id'])->update(array_except($profile, ['id', 'user']));
        echo vj($response->content());
    }
}

?>
