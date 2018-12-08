<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 2:43 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Controllers\Student;


use App\Eloquent\User;
use App\Http\Controllers\Controller;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;

class Profile extends Controller
{
    private $student;

    /**
     * Profile constructor.
     * @param JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        parent::__construct();
        /** @var User $user */
        $user          = \Illuminate\Support\Facades\Auth::guard('api')->user();
        $this->student = $user ? $user->{'student'} : null;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function getUpdate(Request $request)
    {
        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, '', ['profile' => is_null($this->student) ? ['school' => '', 'grade' => ''] : array_only($this->student->toArray(), ['school', 'grade'])]), HttpStatus::OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $data = $this->validate($request, [
            'school' => 'bail|required',
            'grade' => 'bail|required',
        ]);


        $this->student->update($data);

        return response()->json(PopoMapper::alertResponse(HttpStatus::OK, 'Profile Berhasil Diupdate'), HttpStatus::OK);
    }
}

?>
