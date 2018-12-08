<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 18 November 2018, 7:36 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class FinishedOpenedQuestion
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
        /** @var Collection $summary */
        $summary = Auth::guard('api')->user()->getUnfinishedQuestion();

        if (count($summary) !== 0)
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, "Ada Pertanyaan yang belum terjawab", ['questions' => $summary]), HttpStatus::FORBIDDEN);
        }

        return $next($request);
    }
}

?>
