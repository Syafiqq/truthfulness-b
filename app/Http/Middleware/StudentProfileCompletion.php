<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 4:06 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\User;
use App\Eloquent\UserStudents;

class StudentProfileCompletion extends ProfileCompletion
{
    /**
     * @param User $user
     * @return bool
     */
    protected function isProfileComplete(User $user)
    {
        /** @var UserStudents $student */
        $student = $user->{'student'};

        return ((!empty(strval($student->{'school'}))) && (!empty(strval($student->{'grade'}))));
    }
}

?>
