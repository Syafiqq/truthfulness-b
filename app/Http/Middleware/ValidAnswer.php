<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 17 November 2018, 7:43 PM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\QuestionOption;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;

class ValidAnswer
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
        $option = $request->input('answer', null);
        if (is_null($option))
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Pertanyaan Belum Dijawab'), HttpStatus::FORBIDDEN);
        }
        $answer = QuestionOption::where('id', $option ?? 'empty-uuid')->count();
        if ($answer <= 0)
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Jawaban Tidak Valid'), HttpStatus::FORBIDDEN);
        }

        return $next($request);
    }
}

?>
