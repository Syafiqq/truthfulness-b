<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 9:40 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\User;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;

class AvailableOpenedCourse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var User $user */
        $user = \Tymon\JWTAuth\Facades\JWTAuth::user();
        if ($user->hasOpenedCourse())
        {
            return $next($request);
        }
        else
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Tidak Ada Pekerjaan Yang Aktif'), HttpStatus::FORBIDDEN);
        }
    }
}

?>
