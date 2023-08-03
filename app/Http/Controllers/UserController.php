<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function indes()
    {
        $users = User::paginate(5);
        return view('users.indes', compact('users'));
    }

    public function create()
    {
        // Obtener todos los roles para pasarlos a la vista
        $roles = Role::all();

        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario y crear el usuario
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), // Usar bcrypt() para hashear la contraseña
        ]);

        // Obtener el rol que deseas asignar
        $role = Role::find($request->input('role'));

        // Asignar el rol al usuario
        $user->roles()->attach($role);

        return redirect()->route('indes')->with('success', 'Usuario Registrado Exitosamente.');
    }

    public function assignRole(Request $request, $userId)
    {
        $user = User::find($userId);
        if (!$user) {
            return redirect()->route('indes')->with('error', 'Usuario no encontrado.');
        }

        $roleIds = $request->input('roles', []);
        $roles = Role::whereIn('id', $roleIds)->get();

        // Desasignar todos los roles actuales del usuario
        $user->roles()->detach();

        // Asignar los nuevos roles seleccionados
        $user->roles()->attach($roles);

        return redirect()->back()->with('success', 'Roles asignados correctamente.');
    }
}

