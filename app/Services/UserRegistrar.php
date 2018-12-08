<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 20 November 2018, 6:44 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Services;

use App\Eloquent\User;
use App\Eloquent\UserCounselors;
use App\Eloquent\UserStudents;
use Illuminate\Support\Facades\Validator;


class UserRegistrar
{
    private $role;

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        /** @var \Illuminate\Validation\Factory $validator */
        $validator = Validator::getFacadeRoot();

        return $validator->make($data, [
            'credential' => 'required|max:100|unique:users',
            'email' => 'required|max:100|email|unique:users',
            'name' => 'required|max:100',
            'gender' => 'required|in:male,female',
            'role' => "required|in:{$this->role}",
            'password' => 'required|confirmed|min:8',
            'token' => "required|exists:coupons,coupon,usage,{$this->role}",
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Auth\Authenticatable
     */
    public function create(array $data)
    {
        /** @var User $model */
        $model                 = new User;
        $model->{'credential'} = $data['credential'];
        $model->{'email'}      = $data['email'];
        $model->{'name'}       = $data['name'];
        $model->{'gender'}     = $data['gender'];
        $model->{'role'}       = $data['role'];
        $model->{'avatar'}     = null;
        $model->{'password'}   = app('hash')->make($data['password'], null);

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
                    $profile = new UserCounselors();
                    $model->counselor()->save($profile);
                    break;
                }
            case 'student' :
                {
                    /** @var UserStudents $profile */
                    $profile = new UserStudents();
                    $model->student()->save($profile);
                    break;
                }
        }
    }

    public function setRole($role)
    {
        $this->role = $role;
    }
}

?>
