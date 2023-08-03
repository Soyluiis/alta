@extends('adminlte::page')

@section('title', 'Lista de Agentes')
@section('content')
   @section('content_header')
    <h1>Detalles de Altas</h1>
@stop

@section('content')
<div class="card">
   <div class="card-header">
    <h1 class="card-title">Vista Detallada de la Empresa {{$ver->nombre_fiscal}}</h1>
   </div>
  <div class="card-body">
    <div class="row">
        <div class="col-md-9">
            <div class="card card-user">
                <div class="card-body">
                    <p class="card-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Nombre Fiscal de la Empresa:</h5>
                                    <p>{{$ver->nombre_fiscal}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">R.F.C:</h5>
                                    <p>{{$ver->rfc}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">No. CAAT:</h5>
                                    <p>{{$ver->no_caat}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Nombre Comercial de la Agencia de Carga:</h5>
                                    <p>{{$ver->nombre_comercial}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Calle o Avenida:</h5>
                                    <p>{{$ver->calle}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">N° Exterior:</h5>
                                    <p>{{$ver->numero_exterior}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">N° Interior:</h5>
                                    <p>{{$ver->numero_interior}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Colonia:</h5>
                                    <p>{{$ver->colonia}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Codigo Postal:</h5>
                                    <p>{{$ver->codigo_postal}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Delegación/Mpio/Prov:</h5>
                                    <p>{{$ver->delegacion}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Estado:</h5>
                                    <p>{{$ver->estado}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Banco:</h5>
                                    <p>{{$ver->banco}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Cuenta Bancaria:</h5>
                                    <p>{{$ver->cuenta}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Método de Pago:</h5>
                                    <p>{{$ver->metodo_pago}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Régimen Fiscal:</h5>
                                    <p>{{$ver->regimen_fiscal}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Forma de Pago (sólo acepta números):</h5>
                                    <p>{{$ver->forma_pago}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Uso de CFDI:</h5>
                                    <p>{{$ver->uso_cfdi}}</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Tipo de Alta:</h5>
                                    <p>{{$ver->tipo_alta}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Método de Transmisión:</h5>
                                    <p>{{$ver->metodo_transmision}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Correo de Acceso al Portal:</h5>
                                    <p>{{$ver->correo_acceso}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Inicio Vigencia CAAT:</h5>
                                    <p>{{$ver->vigencia_caat_inicio}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Vencimiento Vigencia CAAT:</h5>
                                    <p>{{$ver->vigencia_caat_vencimiento}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Usuario Dato VUCEM:</h5>
                                    <p>{{$ver->dato_vucem_usuario}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Contraseña Web Services Dato VUCEM:</h5>
                                    <p>{{$ver->dato_vucem_contrasenia}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Nombre del Representante Legal:</h5>
                                    <p>{{$ver->representante_legal}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Email Representante Legal:</h5>
                                    <p>{{$ver->email}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Teléfono Representante Legal:</h5>
                                    <p>{{$ver->telefono}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Nombre del contacto de cuentas por pagar:</h5>
                                    <p>{{$ver->contacto_cuentas}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Email del contacto de cuentas por pagar:</h5>
                                    <p>{{$ver->email_cuentas}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Teléfono del contacto de cuentas por pagar:</h5>
                                    <p>{{$ver->telefono_cuentas}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Tarifa (uso exclusivo Validacarga):</h5>
                                    <p>{{$ver->uso_exclusivo_tarifa}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Referencia Bancaria (uso exclusivo Validacarga):</h5>
                                    <p>{{$ver->uso_exclusivo_referencia}}</p>

                                    <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">ID Promotora (uso exclusivo Validacarga):</h5>
                                    <p>{{$ver->uso_exclusivo_id}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-right d-flex justify-content-end">
                                @if(!$ver->enviado)

                                <a href="{{route('edit',$ver->id)}}" class="btn btn-danger mr-2">Editar</a>
                                @endif
                                <a href="{{ route('vista') }}" class="btn btn-danger">Volver</a>
                            </div>
                        </div>




                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
