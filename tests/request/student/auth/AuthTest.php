<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 15 November 2018, 5:33 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */


namespace Tests\Request\Student\Auth;

use App\Eloquent\Session;
use App\Eloquent\User;
use App\Model\Util\ClaimTable;
use App\Model\Util\HttpStatus;
use Ramsey\Uuid\Uuid;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\JWT;

class AuthTest extends TestCase
{
    public function test_it_should_respond_unprocessable_entity_given_no_data()
    {
        /** @var $response */
        $response = $this->json('POST', 'student/auth/login',
            [
            ],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNPROCESSABLE_ENTITY,
        ]);
    }

    public function test_it_should_respond_ok_given_valid_data()
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/login',
            [
                'credential' => '10000',
                'password' => '12345678'
            ],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_not_access_login_page_again()
    {
        /** @var array $token */
        $token    = $this->doAuth();
        $response = $this->json('POST', '/student/auth/login',
            [
                'credential' => '10000',
                'password' => '12345678'
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

    /**
     * @param null $creds
     * @return array
     */
    private function doAuth($creds = null)
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

    public function test_it_should_fail_lost_missing_required_data()
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/lost',
            [],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNPROCESSABLE_ENTITY,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_lost()
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/lost',
            [
                'credential' => '10000'
            ],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        User::where('credential', '10000')->update(['lost_password' => 'd4b6fc9e-00b9-4551-8854-e9ea6bebae5d']);
        echo vj($response->content());
    }

    public function test_it_should_fail_recover_missing_required_data()
    {
        /** @var $response */
        $response = $this->json('PATCH', '/student/auth/recover',
            [
                'password' => '12345678',
                'password_confirmation' => '12345678',
            ],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNPROCESSABLE_ENTITY,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_recover()
    {
        /** @var $response */
        $response = $this->json('PATCH', '/student/auth/recover',
            [
                'token' => 'd4b6fc9e-00b9-4551-8854-e9ea6bebae5d',
                'password' => '12345678',
                'password_confirmation' => '12345678',
            ],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        User::where('credential', '10000')->update(['lost_password' => 'd4b6fc9e-00b9-4551-8854-e9ea6bebae5d']);
        echo vj($response->content());
    }

    public function test_it_should_fail_ping()
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/ping',
            [],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNAUTHORIZED,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_ping()
    {
        /** @var $response */
        $token    = $this->doAuth();
        $response = $this->json('POST', '/student/auth/ping',
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

    public function test_it_should_fail_logout()
    {
        /** @var $response */
        $response = $this->json('POST', '/student/auth/logout',
            [],
            [
                'Accept' => 'application/json',
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNAUTHORIZED,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_logout()
    {
        /** @var $response */
        $token    = $this->doAuth();
        $response = $this->json('POST', '/student/auth/logout',
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

    public function test_it_should_fail_access_logout()
    {
        /** @var $response */
        $token    = $this->doAuth();
        $response = $this->json('POST', '/student/auth/logout',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        $response = $this->json('POST', '/student/auth/logout',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token['data']['token']}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNAUTHORIZED,
        ]);
        echo vj($response->content());
    }

    public function test_it_should_success_refresh()
    {
        $user                 = User::where('credential', '10000')->first();
        $session              = new Session();
        $session->{'id'}      = Uuid::uuid4()->toString();
        $session->{'session'} = json_encode([]);
        $user->session()->save($session);

        $claims = [
            ClaimTable::AUDIENCE => 'k3f', //Audience of the token
            ClaimTable::ISSUER => 'http://localhost/student/auth/login', // Issuer of the token
            ClaimTable::SUBJECT => $user->{'id'}, // Subject of the token
            ClaimTable::ISSUED_AT => time(), // Time when JWT was issued.
            ClaimTable::EXPIRATION => time() + 1, // Expiration time
            ClaimTable::AUTH_STAMP => $user->{'stamp'},
            ClaimTable::SESSION => $session->{'id'},
            ClaimTable::ROLE => $user->{'role'},
        ];

        $payload = JWTFactory::customClaims($claims)->make();
        $token   = JWTAuth::encode($payload)->get();

        /** @var JWT $jwt */
        $jwt    = JWTAuth::getFacadeRoot();
        $before = $jwt->setToken($token)->getPayload()->toArray();
        sleep(2);
        $response = $this->json('POST', '/student/auth/ping',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::UNAUTHORIZED,
        ]);
        $response = $this->json('POST', '/student/auth/refresh',
            [],
            [
                'Accept' => 'application/json',
                'Authorization' => "Bearer {$token}"
            ]);
        $response->assertJson([
            'code' => HttpStatus::OK,
        ]);
        $headers    = $response->headers->all();
        $afterAuth  = $headers['authorization'][0];
        $afterToken = substr($afterAuth, 7);
        $after      = $jwt->setToken($afterToken)->getPayload()->toArray();
        //echo ve($before);
        //echo ve($after);
        $diffKey = array_keys(array_diff($before, $after));
        echo ve(array_only($before, $diffKey));
        echo ve(array_only($after, $diffKey));
    }

}

?>
