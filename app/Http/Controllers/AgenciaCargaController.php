<?php

namespace App\Http\Controllers;

use App\Models\AgenciaCarga;
use Illuminate\Http\Request;

class AgenciaCargaController extends Controller
{
    public function index()
    {
        $vistas = AgenciaCarga::paginate(10);
        return view('agencia.vista', compact('vistas'));
    }

    public function create()
    {
        $enviado = false; // Por defecto, el formulario se mostrará como editable
        return view('agencia.carga', compact('enviado'));
    }

    public function store(Request $request)
{
    // Verificar si se presionó el botón "Enviar" (botón con name="enviar")
    if ($request->has('enviar')) {
        $enviado = true;
    } else {
        $enviado = false;
    }

    // Crear el registro y establecer el valor de "enviado"
    AgenciaCarga::create([
        'nombre_fiscal' => $request->input('nombre_fiscal'),
        'rfc' => $request->input('rfc'),
        'no_caat' => $request->input('no_caat'),
        'nombre_comercial' => $request->input('nombre_comercial'),
        'calle' => $request->input('calle'),
        'numero_exterior' => $request->input('numero_exterior'),
        'numero_interior' => $request->input('numero_interior'),
        'colonia' => $request->input('colonia'),
        'codigo_postal' => $request->input('codigo_postal'),
        'delegacion' => $request->input('delegacion'),
        'estado' => $request->input('estado'),
        'banco' => $request->input('banco'),
        'cuenta' => $request->input('cuenta'),
        'metodo_pago' => $request->input('metodo_pago'),
        'regimen_fiscal' => $request->input('regimen_fiscal'),
        'forma_pago' => $request->input('forma_pago'),
        'uso_cfdi' => $request->input('uso_cfdi'),
        'tipo_alta' => $request->input('tipo_alta'),
        'metodo_transmision' => $request->input('metodo_transmision'),
        'correo_acceso' => $request->input('correo_acceso'),
        'vigencia_caat_inicio' => $request->input('vigencia_caat_inicio'),
        'vigencia_caat_vencimiento' => $request->input('vigencia_caat_vencimiento'),
        'dato_vucem_usuario' => $request->input('dato_vucem_usuario'),
        'dato_vucem_contrasenia' => $request->input('dato_vucem_contrasenia'),
        'representante_legal' => $request->input('representante_legal'),
        'email' => $request->input('email'),
        'telefono' => $request->input('telefono'),
        'contacto_cuentas' => $request->input('contacto_cuentas'),
        'email_cuentas' => $request->input('email_cuentas'),
        'telefono_cuentas' => $request->input('telefono_cuentas'),
        'uso_exclusivo_tarifa' => $request->input('uso_exclusivo_tarifa'),
        'uso_exclusivo_referencia' => $request->input('uso_exclusivo_referencia'),
        'uso_exclusivo_id' => $request->input('uso_exclusivo_id'),
        'enviado' => $enviado,
    ]);

    return redirect()->route('vista')->with('success','Registro Guardado Correctamente');
}
}
