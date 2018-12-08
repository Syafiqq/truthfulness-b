<?php namespace App\Http\Middleware;

use App\Eloquent\User;
use App\Model\Popo\PopoMapper;
use App\Model\Util\HttpStatus;
use Closure;

class RegisteredRole
{
    use RoleSegmentManager;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role = $this->getRole($request);
        if (empty($role) || !in_array($role, User::roles))
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::NOT_FOUND, 'Halaman Tidak Ditemukan'), HttpStatus::NOT_FOUND);
        }
        $request->request->set('role', $role);

        return $next($request);
    }
}
