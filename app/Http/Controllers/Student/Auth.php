<?php namespace App\Http\Controllers\Student;

use App\Eloquent\Coupon;
use App\Eloquent\Session;
use App\Eloquent\User;
use App\Http\Controllers\Controller;
use App\Model\Popo\PopoMapper;
use App\Model\Util\ClaimTable;
use App\Model\Util\HttpStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Token;

class Auth extends Controller
{
    private $role = 'student';

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function postLogin(Request $request)
    {
        $response = response()->json(PopoMapper::alertResponse(HttpStatus::UNAUTHORIZED, 'User Tidak Diketahui'), HttpStatus::UNAUTHORIZED);

        $credentials = $this->validate($request, [
            'credential' => 'bail|required|max:100',
            'password' => 'bail|required|min:8',
            'role' => 'bail|required|in:student,counselor',
        ]);

        // Find the user by email
        /** @var User $user */
        $user = User::where('credential', $credentials['credential'])->where('role', $credentials['role'])->first();
        if (!$user)
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::BAD_REQUEST, 'User dengan data tersebut tidak ditemukan'), HttpStatus::BAD_REQUEST);
        }
        if (!Hash::check($credentials['password'], $user->password))
        {
            return $response;
        }
        $session              = new Session();
        $session->{'id'}      = Uuid::uuid4()->toString();
        $session->{'session'} = json_encode([]);
        $user->session()->save($session);

        return $this->respondWithToken($this->jwt($user, $session));
    }

    /**
     * @param Token $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken(Token $token)
    {
        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Login Sukses', [
            'token' => $token->get(),
            'type' => 'bearer',
            'expires' => JWTFactory::getTTL()
        ]), HttpStatus::OK);
    }

    /**
     * @param User $user
     * @param Session $session
     * @return mixed
     */
    protected function jwt(User $user, Session $session)
    {
        $claims = [
            ClaimTable::AUDIENCE => 'k3f', //Audience of the token
            ClaimTable::ISSUER => url("/{$this->role}/auth/login"), // Issuer of the token
            ClaimTable::SUBJECT => $user->{'id'}, // Subject of the token
            ClaimTable::ISSUED_AT => time(), // Time when JWT was issued.
            ClaimTable::EXPIRATION => time() + 60 * 60, // Expiration time
            ClaimTable::AUTH_STAMP => $user->{'stamp'},
            ClaimTable::SESSION => $session->{'id'},
            ClaimTable::ROLE => $user->{'role'},
        ];

        $payload = JWTFactory::customClaims($claims)->make();

        return JWTAuth::encode($payload);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function registerStore(Request $request)
    {
        $credentials = $this->validate($request, [
            'credential' => 'bail|required|max:100|unique:users',
            'email' => 'bail|required|max:100|email',
            'name' => 'bail|required|max:100',
            'gender' => 'bail|required|in:male,female',
            'role' => 'bail|required|in:student,counselor',
            'password' => 'bail|required|confirmed|min:8',
            'password_confirmation' => 'bail|required|min:8',
            'token' => "bail|required|exists:coupons,coupon,usage,{$this->role}",
        ]);

        /** @var Builder $coupon */
        $coupon = new Coupon();
        $coupon->where('coupon', $credentials['token'])->delete();

        $user                 = new User();
        $user->{'id'}         = Uuid::uuid4()->toString();
        $user->{'stamp'}      = Uuid::uuid4()->toString();
        $user->{'credential'} = $credentials['credential'];
        $user->{'email'}      = $credentials['email'];
        $user->{'name'}       = $credentials['name'];
        $user->{'gender'}     = $credentials['gender'];
        $user->{'role'}       = $credentials['role'];
        $user->{'avatar'}     = null;
        $user->{'password'}   = app('hash')->make($credentials['password'], []);
        $user->save();

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'User berhasil ditambahkan'), HttpStatus::OK);
    }

    /**
     * @param Request $request
     * @param string $role
     * @return $this|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function postLost(Request $request)
    {
        $credentials = $this->validate($request, [
            'credential' => 'required|exists:users,credential|max:100',
            'role' => 'bail|required|in:student,counselor',
        ]);

        /** @var User $user */
        $user = User::where('credential', $credentials['credential'])->first();
        $user->generateRecoveryCode()->save();;

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'User Akan Diproses', ['recovery_token' => $user['lost_password']]), HttpStatus::OK);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function patchRecover(Request $request)
    {
        $credentials = $this->validate($request, [
            'token' => 'bail|required',
            'password' => 'bail|required|confirmed|min:8',
        ]);

        /** @var User $user */
        $user                    = User::where('lost_password', '=', $credentials['token'])->first();
        $user->{'password'}      = app('hash')->make($credentials['password'], []);
        $user->{'lost_password'} = null;
        $user->save();

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Password telah berhasil dirubah', ['credential' => $user['credential'], 'role' => $user['role']]), HttpStatus::OK);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postLogout()
    {
        /** @var User $user */
        /** @noinspection PhpUndefinedMethodInspection */
        \Illuminate\Support\Facades\Auth::guard('api')->logout(true);

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Logout Berhasil'), HttpStatus::OK);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function postRefresh()
    {
        return response()->json(PopoMapper::jsonResponse(HttpStatus::OK, ''), HttpStatus::OK);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ping()
    {
        return response()->json(PopoMapper::jsonResponse(HttpStatus::OK, ''), HttpStatus::OK);
    }
}
