<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 7:37 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\User;
use App\Http\Utils\RouteParam;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class ValidOpenedCourseQuestion
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
        $question = intval(RouteParam::get($request, 'question') ?? 0);

        /** @var User $user */
        $user   = JWTAuth::user();
        $answer = $user->GetAnswerDetail($question);
        if (is_null($answer))
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Pertanyaan Tidak Valid'), HttpStatus::FORBIDDEN);
        }

        return $next($request, $answer);
    }
}

?>
