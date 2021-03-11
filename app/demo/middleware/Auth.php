<?php

namespace app\demo\middleware;

use app\common\facade\Response;
use thans\jwt\facade\JWTAuth;
use Throwable;

class Auth
{
    public function handle($request, \Closure $next)
    {	
    	try {
            JWTAuth::auth();
        } catch (Throwable $e) {
            // dump($e);
            $message = $e->getMessage();
            return json(['code'=>9999,'data'=>$message]);
        }

        return $next($request);
    }
}