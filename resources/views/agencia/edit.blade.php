@extends('adminlte::page')

@section('title', 'Alta de Información')
@section('content')
   @section('content_header')
    <h1>Formato de Alta</h1>
@stop

@section('content')
@if (session('success'))
   <div class="alert alert-success" role="success">
       {{session('success')}}
   </div>
   @endif
   <div class="row">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Editar Formato de Alta de {{$ver->nombre_fiscal}}</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('cargas.update', $ver->id) }}" method="POST">
                        @csrf
                        @method('PUT')


                        <div class="form-group">
                            <label for="nombre_fiscal">Nombre Fiscal de la Agencia de Carga:</label>
                            <input type="text" name="nombre_fiscal" id="nombre_fiscal" class="form-control" value="{{$ver->nombre_fiscal}}">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="rfc">R.F.C:</label>
                                        <input type="text" name="rfc" id="rfc" class="form-control" value="{{$ver->rfc}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_caat">No. CAAT:</label>
                                        <input type="text" name="no_caat" id="no_caat" class="form-control" value="{{$ver->no_caat}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nombre_comercial">Nombre Comercial de la Agencia de Carga:</label>
                            <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control" value="{{$ver->nombre_comercial}}">
                        </div>

                        <div class="form-group">
                            <label for="calle">Calle o Avenida:</label>
                            <input type="text" name="calle" id="calle" class="form-control" value="{{$ver->calle}}">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="numero_exterior">N° Exterior:</label>
                                        <input type="text" name="numero_exterior" id="numero_exterior" class="form-control" value="{{$ver->numero_exterior}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="numero_interior">N° Interior:</label>
                                        <input type="text" name="numero_interior" id="numero_interior" class="form-control" value="{{$ver->numero_interior}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="colonia">Colonia:</label>
                                        <input type="text" name="colonia" id="colonia" class="form-control" value="{{$ver->colonia}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="codigo_postal">Codigo Postal:</label>
                                        <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" value="{{$ver->codigo_postal}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="delegacion">Delegación/Mpio/Prov:</label>
                                        <input type="text" name="delegacion" id="delegacion" class="form-control" value="{{$ver->delegacion}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="estado">Estado:</label>
                                        <input type="text" name="estado" id="estado" class="form-control" value="{{$ver->estado}}">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="calle">Ciudad:</label>
                                <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{$ver->ciudad}}" >
                            </div>
                        </div>

                        <div class="card-header">
                            <h3 class="card-title">Información Financiera</h3>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="banco">Banco:</label>
                                        <input type="text" name="banco" id="banco" class="form-control" value="{{$ver->banco}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="cuenta">Cuenta Bancaria:</label>
                                        <input type="text" name="cuenta" id="cuenta" class="form-control" value="{{$ver->cuenta}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="metodo_pago">Método de Pago:</label>
                                        <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="{{$ver->metodo_pago}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="regimen_fiscal">Régimen Fiscal:</label>
                                        <input type="text" name="regimen_fiscal" id="regimen_fiscal" class="form-control" value="{{$ver->regimen_fiscal}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="forma_pago">Forma de Pago (sólo acepta números):</label>
                                        <input type="number" name="forma_pago" id="forma_pago" class="form-control" value="{{$ver->forma_pago}}">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="uso_cfdi">Uso de CFDI:</label>
                                        <input type="text" name="uso_cfdi" id="uso_cfdi" class="form-control" value="{{$ver->uso_cfdi}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Más Información</h3>
                                </div>
                                <div class="card-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="tipo_alta">Tipo de Alta:</label>
                                                    <select name="tipo_alta" id="tipo_alta" class="form-control">
                                                        <option value="Aero" {{ $ver->tipo_alta === 'Aero' ? 'selected' : '' }}>Aero</option>
                                                        <option value="Maritimo" {{ $ver->tipo_alta === 'Maritimo' ? 'selected' : '' }}>Marítimo</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="metodo_transmision">Método de Transmisión:</label>
                                                    <select name="metodo_transmision" id="metodo_transmision" class="form-control">
                                                        <option value="Portal" {{ $ver->metodo_transmision === 'Portal' ? 'selected' : '' }}>Portal</option>
                                                        <option value="FTP" {{ $ver->metodo_transmision === 'FTP' ? 'selected' : '' }}>FTP</option>
                                                        <option value="UTA" {{ $ver->metodo_transmision === 'UTA' ? 'selected' : '' }}>UTA</option>
                                                        <option value="AGSIVA" {{ $ver->metodo_transmision === 'AGSIVA' ? 'selected' : '' }}>AGSIVA</option>
                                                    </select>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="correo_acceso">Correo de Acceso al Portal:</label>
                                                    <input type="email" name="correo_acceso" id="correo_acceso" class="form-control" value="{{$ver->correo_acceso}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Vigencia CAAT: </h3>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="vigencia_caat_inicio">Inicio:</label>
                                                    <input type="date" name="vigencia_caat_inicio" id="vigencia_caat_inicio" class="form-control" value="{{$ver->vigencia_caat_inicio}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="vigencia_caat_vencimiento">Vencimiento:</label>
                                                    <input type="date" name="vigencia_caat_vencimiento" id="vigencia_caat_vencimiento" class="form-control" value="{{$ver->vigencia_caat_vencimiento}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Dato VUCEM: </h3>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="dato_vucem_usuario">Usuario:</label>
                                                    <input type="text" name="dato_vucem_usuario" id="dato_vucem_usuario" class="form-control" value="{{$ver->dato_vucem_usuario}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="dato_vucem_contrasenia">Contraseña Web Services:</label>
                                                    <input type="password" name="dato_vucem_contrasenia" id="dato_vucem_contrasenia" class="form-control" value="{{$ver->dato_vucem_contrasenia}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Información de Contacto</h3>
                                    </div>

                                    <div class="form-group">
                                        <label for="representante_legal">Nombre del Representante Legal:</label>
                                        <input type="text" name="representante_legal" id="representante_legal" class="form-control" value="{{$ver->representante_legal}}">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="email">Email:</label>
                                                    <input type="email" name="email" id="email" class="form-control" value="{{$ver->email}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="telefono">Teléfono:</label>
                                                    <input type="tel" name="telefono" id="telefono" class="form-control" value="{{$ver->telefono}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="contacto_cuentas">Nombre del contato de cuentas por pagar:</label>
                                        <input type="text" name="contacto_cuentas" id="contacto_cuentas" class="form-control" value="{{$ver->contacto_cuentas}}">
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="email_cuentas">Email:</label>
                                                    <input type="email" name="email_cuentas" id="email_cuentas" class="form-control" value="{{$ver->email_cuentas}}">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="telefono_cuentas">Teléfono:</label>
                                                    <input type="tel" name="telefono_cuentas" id="telefono_cuentas" class="form-control" value="{{$ver->telefono_cuentas}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h3 class="card-title">Para uso exclusivo de Validacarga </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="uso_exclusivo_tarifa">Tarifa:</label>
                                                        <input type="text" name="uso_exclusivo_tarifa" id="uso_exclusivo_tarifa" class="form-control" value="{{$ver->uso_exclusivo_tarifa}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="uso_exclusivo_referencia">Referencia Bancaria:</label>
                                                        <input type="text" name="uso_exclusivo_referencia" id="uso_exclusivo_referencia" class="form-control" value="{{$ver->uso_exclusivo_referencia}}">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="uso_exclusivo_id">ID Promotora:</label>
                                                        <input type="text" name="uso_exclusivo_id" id="uso_exclusivo_id" class="form-control" value="{{$ver->uso_exclusivo_id}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                          <div class="form-group float-right">
                            @if(!$ver->enviado)
                            <button type="submit" class="btn btn-primary" name="btnActualizar" id="btnActualizar">Actualizar</button>
                            @endif
                            <button type="submit" class="btn btn-danger" name="enviar" id="btnEnviar" disabled>Enviar</button>
                </div>
            </form>
        </div>

    </div>
    <script>
        // Función para verificar si todos los campos están llenos, excepto los campos excluidos
        function verificarCamposLlenos() {
            const campos = document.querySelectorAll('input[type="text"], input[type="number"], input[type="email"], input[type="tel"], input[type="password"]');
            for (const campo of campos) {
                if (
                    campo.value.trim() === '' &&
                    campo !== document.getElementById('uso_exclusivo_tarifa') &&
                    campo !== document.getElementById('uso_exclusivo_referencia') &&
                    campo !== document.getElementById('uso_exclusivo_id') &&
                    !campo.classList.contains('campo-no-obligatorio')
                ) {
                    return false;
                }
            }
            return true;
        }

        // Función para verificar y habilitar el botón de enviar
        function verificarYHabilitarBoton() {
            const btnEnviar = document.getElementById('btnEnviar');
            btnEnviar.disabled = !verificarCamposLlenos();
        }

        // Ejecutar la función de verificación cada 2 segundos (2000 milisegundos)
        setInterval(verificarYHabilitarBoton, 2000);

        // Agregar evento "input" a todos los campos para verificar cuando el usuario ingresa información
        const camposInput = document.querySelectorAll('input[type="text"], input[type="number"], input[type="email"], input[type="tel"], input[type="password"]');
        for (const campo of camposInput) {
            campo.addEventListener('input', function () {
                verificarYHabilitarBoton(); // Llamar a la función de verificación al ingresar información en un campo
            });
        }

        // Omitir la validación de campos exclusivos al enviar el formulario
        const formulario = document.getElementById('formulario'); // Cambia 'formulario' al ID correcto de tu formulario
        formulario.addEventListener('submit', function (event) {
            if (!verificarCamposLlenos()) {
                event.preventDefault(); // Evitar el envío del formulario si no se cumplen las validaciones
                // Puedes agregar aquí algún mensaje o lógica adicional si lo deseas
            }
        });
    </script>
@stop
