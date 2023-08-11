<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Modificar el método credentials para incluir el campo "folio" solo si está presente
    /* protected function credentials(Request $request)
    {
        $credentials = [];

        // Agregar el campo "folio" a las credenciales solo si está presente en la solicitud
        if ($request->filled('folio')) {
            $credentials['folio'] = $request->input('folio');
        } else {
            $credentials[$this->username()] = $request->input($this->username());
            $credentials['password'] = $request->input('password');
        }

        return $credentials;
    }
 */
    // Sobreescribir el método authenticated para asignar automáticamente el rol "user" solo si se utilizó el folio
    /* protected function authenticated(Request $request, $user)
    {
        // Verificar si el folio fue proporcionado en las credenciales
        if ($request->filled('folio')) {
            // Asignar automáticamente el rol "user" al usuario
            $role = Role::where('name', 'user')->first();
            if ($role) {
                $user->roles()->sync([$role->id]);
            }
        }
    } */

    protected function validateLogin(Request $request)
{
    $this->validate($request, [
        'email' => 'nullable|email',
        'folio' => 'nullable|string',
        'password' => 'required|string',
    ]);
}

protected function credentials(Request $request)
{
    $credentials = $request->only('email', 'folio', 'password');
    return $credentials;
}

protected function attemptLogin(Request $request)
{
    // Attempt authentication with email and password
    $attemptWithEmail = $this->guard()->attempt(
        $this->credentials($request), $request->filled('remember')
    );

    // Attempt authentication with folio
    $attemptWithFolio = false;
    if (!$attemptWithEmail && $request->filled('folio')) {
        $attemptWithFolio = $this->guard()->attempt(
            ['folio' => $request->input('folio'), 'password' => $request->input('password')],
            $request->filled('remember')
        );
    }

    return $attemptWithEmail || $attemptWithFolio;
}


}
