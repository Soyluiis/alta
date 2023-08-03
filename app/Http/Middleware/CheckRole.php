<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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

