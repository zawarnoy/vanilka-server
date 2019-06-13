<?php


namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\ModalComponent;
use Closure;

class ViewParametersMiddleware
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $modalComponents =
            ModalComponent::where('type', '=', $request->route()->getName() == 'main' ? 'individual' : 'entity')->get();

//        print_r($modalComponents); die;

        \View::share('modalComponents', $modalComponents);
        return $next($request);
    }
}