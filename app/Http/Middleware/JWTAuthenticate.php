<?php
/**
 * This <konseling-003-backend> project created by :
 * Name         : syafiq
 * Date / Time  : 16 November 2018, 6:23 AM.
 * Email        : syafiq.rezpector@gmail.com
 * Github       : syafiqq
 */

namespace App\Http\Middleware;

use App\Model\Popo\PopoMapper;
use App\Model\Util\ClaimTable;
use App\Model\Util\HttpStatus;
use App\Model\Util\Session;
use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Payload;

class JWTAuthenticate extends \Tymon\JWTAuth\Http\Middleware\Authenticate
{
    protected $role;

    public function __construct(\Tymon\JWTAuth\JWTAuth $auth)
    {
        parent::__construct($auth);
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     *
     * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->authenticate($request);
        /** @var Payload $payload */
        $payload = JWTAuth::getPayload();
        if ($payload->get(ClaimTable::ROLE) != $this->role)
        {
            return response()->json(PopoMapper::alertResponse(HttpStatus::FORBIDDEN, 'User tidak diketahui'), HttpStatus::FORBIDDEN);
        }
        try
        {
            Session::$session = json_decode(\App\Eloquent\Session::where('id', $payload->get(ClaimTable::SESSION))->first()->get()->pluck('storage')[0] ?? '{}', true) ?? [];
        }
        catch (\Exception $_)
        {
            Session::$session = [];
        }

        return $next($request);
    }
}

?>
