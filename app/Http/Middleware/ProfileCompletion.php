<?php namespace App\Http\Middleware;

use App\Eloquent\User;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;
use Illuminate\Support\Facades\Auth;

abstract class ProfileCompletion
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
        if ($request->expectsJson())
        {
            if ($this->isProfileComplete(Auth::guard('api')->user()))
            {
                return $next($request);
            }
            else
            {
                return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'Profil Anda Belum Lengkap'), HttpStatus::FORBIDDEN);
            }
        }
        else
        {
            if ($this->isProfileComplete(Auth::user()))
            {
                return $next($request);
            }
            else
            {
                return redirect()->back()->with('cbk_msg', ['notify' => ['Profil Anda Belum Lengkap']]);
            }
        }

    }

    /**
     * @param User $user
     * @return bool
     */
    protected abstract function isProfileComplete(User $user);

}
