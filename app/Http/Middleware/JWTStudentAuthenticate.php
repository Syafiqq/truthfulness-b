<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 16 November 2018, 6:32 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use Tymon\JWTAuth\JWTAuth;

class JWTStudentAuthenticate extends JWTAuthenticate
{

    /**
     * JWTStudentAuthenticate constructor.
     * @param JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        parent::__construct($auth);
        $this->role = 'student';
    }
}

?>
