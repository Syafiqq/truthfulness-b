<?php
/**
 * This <konseling-1> project created by :
 * Name         : syafiq
 * Date / Time  : 26 November 2017, 12:13 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Controllers;


use App\Eloquent\Coupon;
use App\Eloquent\User;
use App\Eloquent\UserCounselors;
use App\Eloquent\UserStudents;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

trait AuthFlow
{
    /**
     * @param Request $request
     * @param string $role
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function registerStore(Request $request, $role)
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
        $coupon->where('coupon', '=', $request->input('token', null))->delete();

        $this->create($credentials);

        return redirect()->route("$role.auth.login.get")->with('cbk_msg', ['notify' => ['Register Berhasil']]);
    }

    public function create(array $data)
    {
        /** @var User $model */
        $model                 = new User;
        $model->{'id'}         = Uuid::uuid4()->toString();
        $model->{'stamp'}      = Uuid::uuid4()->toString();
        $model->{'credential'} = $data['credential'];
        $model->{'email'}      = $data['email'];
        $model->{'name'}       = $data['name'];
        $model->{'gender'}     = $data['gender'];
        $model->{'role'}       = $data['role'];
        $model->{'avatar'}     = null;
        $model->{'password'}   = bcrypt($data['password']);

        $model->save();
        $this->createProfile($model);

        return $model;
    }

    private function createProfile(User $model)
    {
        switch ($this->role)
        {
            case 'counselor' :
                {
                    /** @var UserCounselors $profile */
                    $profile         = new UserCounselors();
                    $profile->{'id'} = Uuid::uuid4()->toString();

                    $model->counselor()->save($profile);
                    break;
                }
            case 'student' :
                {
                    /** @var UserStudents $profile */
                    $profile         = new UserStudents();
                    $profile->{'id'} = Uuid::uuid4()->toString();
                    $model->student()->save($profile);
                    break;
                }
        }
    }

    /**
     * @param Request $request
     * @param string $role
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request, $role)
    {
        $this->validate($request, [
            'credential' => 'required|exists:users,credential|max:100',
            'password' => 'required|min:8',
            'role' => "required|in:{$role}",
        ]);

        $credentials = $request->only(['credential', 'password', 'role']);

        if (Auth::attempt($credentials, false))
        {
            return $this->validResponseOrDefault($this->redirectPath(), redirect()->intended($this->redirectPath()), ['notify' => ['Successfully Login']]);
        }
        else
        {
            return $this->validResponseOrDefault($this->loginPath(), redirect($this->loginPath()))
                ->withInput($request->only(['credential', 'password']))
                ->withErrors([
                    'email' => $this->getFailedLoginMessage(),
                ]);
        }
    }

    /**
     * @param \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|string $response
     * @param \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse $default
     * @param null $callback
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function validResponseOrDefault($response, $default, $callback = null)
    {
        $valid = is_string($response) ? $default : $response;

        return $callback ? $valid->with('cbk_msg', $callback) : $valid;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath'))
        {
            return $this->redirectPath;
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : $this->defaultRedirectPath();
    }

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|string
     */
    private function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : $this->defaultLoginPath();
    }

    public function getFailedLoginMessage()
    {
        return 'Akun Tidak Terdaftar';
    }

    /**
     * @param Request $request
     * @param string $role
     * @return $this|\Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function postLost(Request $request, $role)
    {
        $this->validate($request, [
            'credential' => 'required|exists:users,credential|max:100',
            'role' => "required|in:{$role}",
        ]);

        /** @var User $user */
        $user = User::where('credential', $request->input('credential'))->first();
        $user->generateRecoveryCode()->save();
        $path = $this->defaultRecoverPath($user);

        return redirect($path)->with('cbk_msg', ['notify' => ['Silahkan ganti password anda disini', 'Hubungi Konselor untuk mendapatkan token']]);
    }

    public function patchRecover($role, User $user, Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:8',
        ]);

        $user->{'password'}      = bcrypt($request->input('password'));
        $user->{'lost_password'} = null;
        $user->save();

        return redirect()->route("$role.auth.login.get")->with('cbk_msg', ['notify' => ['Password telah berhasil dirubah']]);
    }

    public function getLogout()
    {
        /** @var User $user */
        /** @noinspection PhpUndefinedMethodInspection */
        $role = Auth::user()->{'role'};
        Auth::logout();

        return redirect()->route("$role.auth.login.get")->with('cbk_msg', ['notify' => ['Successfully Logout']]);
    }

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|string
     */
    abstract public function defaultLoginPath();

    /**
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|string
     */
    abstract public function defaultRedirectPath();

    /**
     * @param User $user
     * @return string
     */
    abstract public function defaultRecoverPath(User $user);
}

?>
