<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon; // Agrega la clase Carbon
use App\Models\AgenciaCarga;
use Illuminate\Support\Facades\Mail;
use App\Mail\FolioGenerated;

class IngresarFolioController extends Controller
{
    public function altaFolio(Request $request)
    {
        $folio = $request->input('folio');
        $fechaVencimiento = $request->input('fecha_vencimiento'); // Obtén la fecha de vencimiento del formulario
        $correo = $request->input('correo'); // Obtén el correo del formulario

        // Validar si el folio ya existe en la base de datos
        $existingUser = User::where('folio', $folio)->first();

        if ($existingUser) {
            return redirect()->back()->with('error', 'El folio ya está registrado.');
        }

        // Obtener la fecha de vencimiento del formulario
        $fechaVencimiento = $request->input('fecha_vencimiento');

        // Convertir la fecha de vencimiento en un objeto Carbon
        $fechaVencimientoCarbon = Carbon::parse($fechaVencimiento);

        // Establecer la hora, minutos y segundos a 23:59:59 (último segundo del día)
        $fechaVencimientoCarbon->setHour(23)->setMinute(59)->setSecond(59);

        $capturador = Auth::user()->name;

        // Crear el usuario con el folio ingresado, fecha de vencimiento y asignar el rol "usuario"
        User::create([
            'folio' => $folio,
            'name' => $folio,
            'password' => Hash::make($folio),
            'role' => 'usuario',
            'fecha_vencimiento' => $fechaVencimientoCarbon, // Almacenar la fecha de vencimiento ajustada
            'capturador' => $capturador, // Asignar el valor del capturador
        ]);

        // Envía el folio al correo proporcionado
        Mail::to($correo)->send(new FolioGenerated($folio)); // Asegúrate de crear la clase FolioGenerated que extienda Mailable

        return redirect()->back()->with('success', 'Folio dado de alta exitosamente y enviado al correo.');
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

        // Establecer la hora, minutos y segundos a 23:59:59 (último segundo del día)
        $fechaVencimiento->setHour(23)->setMinute(59)->setSecond(59);

        if ($currentDate->gt($fechaVencimiento)) {
            return redirect()->back()->with('error', 'Folio vencido.');
        }

        // Verificar la cantidad de usos disponibles
        if ($user->folio_usos >= 5) {
            return redirect()->back()->with('error', 'Has alcanzado el límite de usos para este folio.');
        }

        // Incrementar la cantidad de usos
        $user->increment('folio_usos');

        // Marcar el folio como utilizado si se alcanza el límite
        if ($user->folio_usos >= 5) {
            $user->update(['used_folio' => true]);
        }

        // Autenticar al usuario
        Auth::login($user);

        // Calcular cuántos usos restan
        $usosRestantes = 5 - $user->folio_usos;

        $agenciaCarga = $user->agenciaCarga;

        if ($agenciaCarga) {
            // Si existe, redirigir a la vista de edición con el ID del registro en AgenciaCarga
            return redirect()->route('edit', ['ver' => $agenciaCarga->id])->with('success', 'Te quedan ' . $usosRestantes . ' intentos');
        } else {
            // Si no existe, redirigir al formulario de carga
            return view('agencia.carga')->with('success', 'Te quedan ' . $usosRestantes . ' intentos');
        }
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
        return view('users.alta-folio', compact('generatedFolio'));
    }
}
