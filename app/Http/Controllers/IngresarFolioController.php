<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IngresarFolioController extends Controller
{
    public function showForm()
    {
        return view('auth.folio'); // Nombre de la vista para ingresar el folio
    }

    public function ingresarFolio(Request $request)
{
    $folio = $request->input('folio');

    // Buscar o crear un usuario con el folio ingresado
    $user = User::firstOrCreate(['folio' => $folio], [
        'name' => $folio,
        'password' => Hash::make($folio),
        'role' => 'admin',
    ]);

    // Autenticar al usuario
    Auth::login($user);

    // Redirigir al área protegida
    return redirect('/admin');
}






}
