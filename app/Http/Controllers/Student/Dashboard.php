<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 24 November 2018, 5:54 AM.
 * Email        : syafiq.rezpectorgmail.com
 * Github       : syafiqq
 */

namespace App\Http\Controllers\Student;


use App\Http\Controllers\Controller;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class Dashboard extends Controller
{
    private $profile;
    private $user;

    /**
     * Profile constructor.
     * @param JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        parent::__construct();
        $this->user    = $auth->user();
        $this->profile = $this->user ? $this->user->{'student'} : null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $answer = $this->user->{'answer'}->last();
        $now    = \Carbon\Carbon::now();

        if ($this->user->hasOpenedCourse())
        {
            $course_status = 0;
        }
        elseif ((intval($this->profile->{'active'}) === 1) || is_null($answer) || ($answer->{'finished_at'}->diffInDays($now) > \App\Eloquent\Answer::$exerciseWindow))
        {
            $course_status = 1;
        }
        else
        {
            $course_status = 2;
        }

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, '', compact('course_status')), HttpStatus::OK);
    }
}

?>
