<?php

use App\Model\Util\HttpStatus;

/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 24 November 2018, 6:04 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */
class GetterTest extends \Tests\TestCase
{
    public function test_get_dashboard()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('GET', '/student/dashboard',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
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

    public function test_get_profile()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('GET', '/student/profile',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        echo vj($response->content());
    }

    public function test_get_question()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('GET', '/student/course/start/1',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        echo vj($response->content());
    }

    public function test_get_navigation()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('GET', '/student/course/navigation/1',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        echo vj($response->content());
    }

    public function test_get_result()
    {
        /** @var $response */
        $token    = $this->auth();
        $response = $this->json('GET', '/student/course/result',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        echo vj($response->content());
    }
}

?>
