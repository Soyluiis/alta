<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class CheckRole
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles->contains('id', 1)) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Acceso denegado: Debes ser un administrador para acceder a esta página.');
    }
}
class PreventFormAccessAfterSubmit
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && session()->has('form_submitted')) {
            session()->forget('form_submitted');
            return Redirect::route('form-submitted-page');
        }

        return $next($request);
    }
}
