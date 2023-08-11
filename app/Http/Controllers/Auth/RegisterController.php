<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // Agregar esta función para obtener roles disponibles
    public function roles()
    {
        return Role::pluck('name', 'id');
    }

    // Sobreescribir el método showRegistrationForm
    public function showRegistrationForm()
    {
        $roles = $this->roles();
        return view('auth.register', compact('roles'));
    }

    // Sobreescribir el método create para guardar el rol seleccionado
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Asignar el rol seleccionado al usuario
        $user->roles()->sync([$data['role']]);

        return $user;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function store(Request $request)
{
    return User::create([
        'name' => $request->input('folio'), // Usamos el folio como nombre
        'folio' => $request->input('folio'), // Agregamos el folio
        'password' => Hash::make($request->input('folio')), // Usamos el folio como contraseña
        'role' => 'user', // Asignamos automáticamente el rol "user"
    ]);

}
}
