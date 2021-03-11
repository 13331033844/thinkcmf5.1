<?php

namespace app\test\auth;

class Middleware
{
    public function handle($request, \Closure $next)
    {
        echo '1111';

        return $next($request);
    }
}