<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon; // Agrega la clase Carbon

class IngresarFolioController extends Controller
{
    public function altaFolio(Request $request)
{
    $folio = $request->input('folio');
    $fechaVencimiento = $request->input('fecha_vencimiento'); // Obtén la fecha de vencimiento del formulario

    // Validar si el folio ya existe en la base de datos
    $existingUser = User::where('folio', $folio)->first();

    if ($existingUser) {
        return redirect()->back()->with('error', 'El folio ya está registrado.');
    }

    // Crear el usuario con el folio ingresado, fecha de vencimiento y asignar el rol "usuario"
    User::create([
        'folio' => $folio,
        'name' => $folio,
        'password' => Hash::make($folio),
        'role' => 'usuario',
        'fecha_vencimiento' => $fechaVencimiento, // Almacenar la fecha de vencimiento en la base de datos
    ]);

    return redirect()->back()->with('success', 'Folio dado de alta exitosamente.');
}


public function ingresarFolio(Request $request)
{
    $folio = $request->input('folio');

    // Validar si el folio existe en la base de datos y no ha sido utilizado
    $user = User::where('folio', $folio)
                ->where('used_folio', false)
                ->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Folio no válido o ya utilizado.');
    }

    // Verificar si la fecha actual es menor o igual a la fecha de vencimiento
    $currentDate = now();
    $fechaVencimiento = Carbon::parse($user->fecha_vencimiento);

    if ($currentDate->gt($fechaVencimiento)) {
        return redirect()->back()->with('error', 'Folio vencido.');
    }

    // Marcar el folio como utilizado
    $user->update(['used_folio' => true]);

    // Autenticar al usuario
    Auth::login($user);

    // Redirigir al área protegida
    return redirect('/carga');
}


public function showAltaForm()
{

    return view('users.alta-folio');
}




public function showIngresoForm()
{

    return view('auth.folio');
}


public function generateAutomaticFolio()
{
    $prefix = '01-';
    $randomNumber = str_pad(mt_rand(1, 99999999), 8, '0', STR_PAD_LEFT);
    $generatedFolio = $prefix . $randomNumber;

    // Puedes devolver este folio generado a la vista o hacer lo que necesites
    return view('users.alta-folio', compact('generatedFolio'));}


}
