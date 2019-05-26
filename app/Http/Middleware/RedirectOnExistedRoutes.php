<?php


namespace App\Http\Middleware;


use Closure;

class RedirectOnExistedRoutes
{
    public function handle($request, Closure $next, $guard = null)
    {
        echo 'tut'; die;
    }
}