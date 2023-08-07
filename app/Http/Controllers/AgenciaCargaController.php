<?php

namespace App\Http\Controllers;

use App\Models\AgenciaCarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

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
        // Validar los datos enviados por el formulario
        $validator = Validator::make($request->all(), [
            'nombre_fiscal' => 'nullable|string',
            'rfc' => 'nullable|string',
            'no_caat' => 'nullable|string',
            'nombre_comercial' => 'nullable|string',
            'calle' => 'nullable|string',
            'numero_exterior' => 'nullable|string',
            'numero_interior' => 'nullable|string',
            'colonia' => 'nullable|string',
            'codigo_postal' => 'nullable|string',
            'delegacion' => 'nullable|string',
            'estado' => 'nullable|string',
            'banco' => 'nullable|string',
            'cuenta' => 'nullable|string',
            'metodo_pago' => 'nullable|string',
            'regimen_fiscal' => 'nullable|string',
            'forma_pago' => 'nullable|string',
            'uso_cfdi' => 'nullable|string',
            'tipo_alta' => 'nullable|string',
            'metodo_transmision' => 'nullable|string',
            'correo_acceso' => 'nullable|email',
            'vigencia_caat_inicio' => 'nullable|date',
            'vigencia_caat_vencimiento' => 'nullable|date',
            'dato_vucem_usuario' => 'nullable|string',
            'dato_vucem_contrasenia' => 'nullable|string',
            'representante_legal' => 'nullable|string',
            'email' => 'nullable|email',
            'telefono' => 'nullable|string',
            'contacto_cuentas' => 'nullable|string',
            'email_cuentas' => 'nullable|email',
            'telefono_cuentas' => 'nullable|string',
            'uso_exclusivo_tarifa' => 'nullable|string',
            'uso_exclusivo_referencia' => 'nullable|string',
            'uso_exclusivo_id' => 'nullable|string',
            'ciudad'=> 'nullable|string',

        ]);

        // Si la validación falla, mostrar errores y volver al formulario
        if ($validator->fails()) {
            return redirect()->route('vista')->withErrors($validator);
        }

        // Si el formulario se envió, marcar como enviado y guardar los datos
        if ($request->has('enviar')) {
            AgenciaCarga::create(array_merge($request->all(), ['enviado' => true]));
            return redirect()->route('vista')->with('success', 'Formulario Enviado Exitosamente.');
        }

        // Si el botón guardar se presionó, guardar los datos sin marcar como enviado
        AgenciaCarga::create($request->all());

        return redirect()->route('vista')->with('success', 'Registro Guardado Correctamente');
    }


public function show($id)
{
    $ver=AgenciaCarga::findOrFail($id);
    return view ('agencia.show',compact('ver'));
}

public function edit($id)
{
    $ver=AgenciaCarga::findOrFail($id);
    return view ('agencia.edit',compact('ver'));

}

public function update(Request $request, $id)
{
    $validator = Validator::make($request->all(), [
        'nombre_fiscal' => 'nullable|string',
        'rfc' => 'nullable|string',
        'no_caat' => 'nullable|string',
        'nombre_comercial' => 'nullable|string',
        'calle' => 'nullable|string',
        'numero_exterior' => 'nullable|string',
        'numero_interior' => 'nullable|string',
        'colonia' => 'nullable|string',
        'codigo_postal' => 'nullable|string',
        'delegacion' => 'nullable|string',
        'estado' => 'nullable|string',
        'banco' => 'nullable|string',
        'cuenta' => 'nullable|string',
        'metodo_pago' => 'nullable|string',
        'regimen_fiscal' => 'nullable|string',
        'forma_pago' => 'nullable|string',
        'uso_cfdi' => 'nullable|string',
        'tipo_alta' => 'nullable|string',
        'metodo_transmision' => 'nullable|string',
        'correo_acceso' => 'nullable|email',
        'vigencia_caat_inicio' => 'nullable|date',
        'vigencia_caat_vencimiento' => 'nullable|date',
        'dato_vucem_usuario' => 'nullable|string',
        'dato_vucem_contrasenia' => 'nullable|string',
        'representante_legal' => 'nullable|string',
        'email' => 'nullable|email',
        'telefono' => 'nullable|string',
        'contacto_cuentas' => 'nullable|string',
        'email_cuentas' => 'nullable|email',
        'telefono_cuentas' => 'nullable|string',
        'uso_exclusivo_tarifa' => 'nullable|string',
        'uso_exclusivo_referencia' => 'nullable|string',
        'uso_exclusivo_id' => 'nullable|string',
        'ciudad'=> 'nullable|string',
    ]);
    // Verificar si la validación falló
    if ($validator->fails()) {
        // Redirigir de vuelta al formulario con los errores de validación
        return redirect()->back()->withErrors($validator)->withInput();
    }

    // Encontrar el registro de AgenciaCarga por su ID
    $ver = AgenciaCarga::findOrFail($id);

    // Verificar el valor del campo "enviado"
    if ($ver->enviado) {
        // Si el campo "enviado" es true, redirigir sin realizar la actualización
        return redirect()->route('vista')->with('error', 'No se puede editar el formulario, ya ha sido enviado.');
    }

    // Actualizar los datos del registro con los datos recibidos del formulario
    $ver->update($request->all());

    // Si el formulario se envió, marcar como enviado y guardar los datos
    if ($request->has('enviar')) {
        $ver->update(array_merge($request->all(), ['enviado' => true]));
        return redirect()->route('vista')->with('success', 'Formulario Enviado Exitosamente.');
    }

    // Redirigir de vuelta al formulario con un mensaje de éxito
    return redirect()->back()->with('success', 'Formulario actualiado Exitosamente.');
}

public function destroy($id)
{
    // Encontrar el registro de AgenciaCarga por su ID
    $ver= AgenciaCarga::findOrFail($id);

    // Verificar si el formulario ya ha sido enviado
    if ($ver->enviado) {
        return redirect()->route('vista')->with('error', 'No se puede eliminar el registro, el formulario ya ha sido enviado.');
    }

    // Eliminar el registro
    $ver->delete();

    // Redirigir de vuelta al listado de registros con un mensaje de éxito
    return redirect()->route('vista')->with('', 'Registro eliminado correctamente.');
}


}
