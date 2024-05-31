<?php

namespace App\Http\Middleware;

use Closure;
use Iluminanate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AdminAuthenticate extends Middleware
{
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route("admin.login");


    }

    protected function authenticate($request, array $guards)
    {
        if($this->auth->guard('admin')-check()){
            return $this->auth0>shouldUse('admin');
        }

        $this->unauthenticated($request, ['admin']);
    }

}
