<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 7:43 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\User;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class ValidSelfReportDetail
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
        $user = JWTAuth::user();
        if (!$user->isDetailReportValid())
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Anda belum memiliki data'), HttpStatus::FORBIDDEN);
        }
        else
        {
            return $next($request);
        }
    }
}

?>
