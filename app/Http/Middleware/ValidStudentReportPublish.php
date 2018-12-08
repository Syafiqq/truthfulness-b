<?php namespace App\Http\Middleware;

use App\Eloquent\User;
use Closure;
use Ramsey\Uuid\Uuid;

class ValidStudentReportPublish
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
        $id     = $request->route('id', Uuid::NIL);
        $answer = $request->route('answer', Uuid::NIL);
        /** @var User $user */
        $user = User::with(['answer' => function ($query) use ($answer) {
            $query->where('id', '=', $answer);
        }])->where('id', '=', $id)->first();
        if (is_null($user))
        {
            return redirect()->back()->with('cbk_msg', ['notify' => ['User Tidak Dikenali']]);
        }
        else if (count($user->getAttribute('answer')) <= 0)
        {
            return redirect()->back()->with('cbk_msg', ['notify' => ['Data Tidak Ditemukan']]);
        }
        else if (is_null($user->getAttribute('answer')->first()->getAttribute('finished_at')))
        {
            return redirect()->back()->with('cbk_msg', ['notify' => ['Data Belum Diselesaikan']]);
        }
        else
        {
            return $next($request);
        }
    }

}
