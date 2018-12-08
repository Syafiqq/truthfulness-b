<?php namespace App\Http\Middleware;

use App\Eloquent\User;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;

class ValidAuthRecovery
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
        $token = $request->post('token', null);
        $user  = User::where('lost_password', '=', $token)
            ->first();
        if ($user === null)
        {
            if ($request->expectsJson())
            {
                return response()->json(PopoMapper::alertResponse(HttpStatus::NOT_FOUND, 'Halaman Tidak Ditemukan'), HttpStatus::NOT_FOUND);
            }
            else
            {
                abort(404);
            }
        }
        else
        {
            if ($request->expectsJson())
            {

            }
            else
            {
                $request->route()->setParameter('user', $user);
            }
        }

        return $next($request);
    }

}
