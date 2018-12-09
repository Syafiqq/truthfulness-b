<?php
/**
 * This <truthfulness-b> project created by :
 * Name         : syafiq
 * Date / Time  : 09 December 2018, 7:22 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;


use App\Eloquent\Answer;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class ValidSelfReportPublish
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
        $answer = $request->route('answer', Uuid::NIL);

        /** @var Answer $answer */
        $answer = Auth::guard('api')::user()->answer()->where('id', '=', $answer)->first();
        if (is_null($answer))
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Data Tidak Ditemukan'), HttpStatus::FORBIDDEN);
        }
        else if (is_null($answer->getAttribute('finished_at')))
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Data Belum Diselesaikan'), HttpStatus::FORBIDDEN);
        }
        else
        {
            return $next($request);
        }
    }
}

?>
