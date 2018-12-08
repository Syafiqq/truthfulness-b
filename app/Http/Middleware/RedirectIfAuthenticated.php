<?php

namespace App\Http\Middleware;

use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Http\Middleware\Check;
use Tymon\JWTAuth\JWTAuth;

class RedirectIfAuthenticated extends Check
{
    /**
     * RedirectIfAuthenticated constructor.
     * @param JWTAuth $auth
     */
    public function __construct(JWTAuth $auth)
    {
        parent::__construct($auth);
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($request->expectsJson())
        {
            if ($this->auth->parser()->setRequest($request)->hasToken())
            {
                try
                {
                    if ($this->auth->parseToken()->authenticate() != null)
                    {
                        return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Tidak Dapat Mengakses Halaman Tersebut'), HttpStatus::FORBIDDEN);
                    }
                }
                catch (\Exception $_)
                {
                    //
                }
            }
        }
        else
        {
            if (Auth::guard($guard)->check())
            {
                return redirect('/home');
            }
        }

        return $next($request);
    }
}
