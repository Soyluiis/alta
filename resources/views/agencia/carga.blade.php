@extends('adminlte::page')

@section('title', 'Alta de Información')
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">


    @section('content')
        {{-- Contenido del formulario --}}

    @section('content')
   @section('content_header')
    <h1>Formato de Alta</h1>
    @if (session('success'))
   <div class="alert alert-success" role="success">
       {{session('success')}}
   </div>
   @endif
   @if (session('error'))
   <div class="alert alert-danger" role="success">
       {{session('error')}}
   </div>
   @endif
    @stop
    @section('content')
@if (Auth::check())
   <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="col-3 form-inline">

                    </div>

                </div>





                <div class="card-body">
                    <form action="{{ route('cargas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="usuario_id">Folio:  </label>
                            <input type="text" name="usuario_id" id="usuario_id" class="form-control" value="{{ auth()->user()->name }}" readonly>



                        </div>

                        <div class="form-group">
                            <label for="nombre_fiscal">Nombre Fiscal de la Agencia de Carga:</label>
                            <input type="text" name="nombre_fiscal" id="nombre_fiscal" class="form-control" >
                        </div>


                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="rfc">R.F.C:</label>
                                        <input type="text" name="rfc" id="rfc" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_caat">No. CAAT:</label>
                                        <input type="text" name="no_caat" id="no_caat" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="no_caat_aereo">No. CAAT Aereo:</label>
                                        <input type="text" name="no_caat_aereo" id="no_caat_aereo" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="nombre_comercial">Nombre Comercial de la Agencia de Carga (sin Regimen Capital): </label>
                            <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="calle">Calle o Avenida:</label>
                            <input type="text" name="calle" id="calle" class="form-control" >
                        </div>



                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="numero_exterior">N° Exterior:</label>
                                  <input type="text" name="numero_exterior" id="numero_exterior" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="numero_interior">N° Interior:</label>
                                  <input type="text" name="numero_interior" id="numero_interior" class="form-control">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="colonia">Colonia:</label>
                                  <input type="text" name="colonia" id="colonia" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="codigo_postal">Codigo Postal:</label>
                                  <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" >
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="delegacion">Delegación/Mpio/Prov:</label>
                                  <input type="text" name="delegacion" id="delegacion" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="estado">Estado:</label>
                                  <input type="text" name="estado" id="estado" class="form-control" >
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="calle">Ciudad:</label>
                                <input type="text" name="ciudad" id="ciudad" class="form-control" >
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
                                  <input type="text" name="banco" id="banco" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="cuenta">Cuenta Bancaria:</label>
                                  <input type="text" name="cuenta" id="cuenta" class="form-control" >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="metodo_pago">Método de Pago:</label>
                                        <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" value="PPD" readonly>
                                    </div>
                                </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="regimen_fiscal">Régimen Fiscal:</label>
                                  <input type="text" name="regimen_fiscal" id="regimen_fiscal" class="form-control" >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="forma_pago">Forma de Pago (sólo acepta números):</label>
                                        <input type="number" name="forma_pago" id="forma_pago" class="form-control" value="99" readonly>
                                    </div>
                                </div>
                              <div class="col">
                                <div class="form-group">
                                    <label for="uso_cfdi">Uso de CFDI:</label>
                                    <select name="uso_cfdi" id="uso_cfdi" class="form-control">
                                        <option value="G01: Adquisición de mercancías">G01: Adquisición de mercancías</option>
                                        <option value="G02: Devoluciones o bonificaciones">G02: Devoluciones o bonificaciones</option>
                                        <option value="G03: Gastos en general">G03: Gastos en general</option>
                                        <option value="O01: Construcciones">O01: Construcciones</option>
                                    </select>
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
                                    <option value="Aero">Aero</option>
                                    <option value="Maritimo">Marítimo</option>
                                    <option value="Maritimo y Aereo">Marítimo y Aereo</option>
                                </select>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                                <label for="metodo_transmision">Método de Transmisión:</label>
                                <select name="metodo_transmision" id="metodo_transmision" class="form-control">
                                    <option value="Portal">Portal</option>
                                    <option value="FTP">FTP</option>
                                    <option value="UTA">UTA</option>
                                    <option value="AGSIVA">AGSIVA</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="correo_acceso">Correo de Acceso al Portal:</label>
                              <input type="email" name="correo_acceso" id="correo_acceso" class="form-control" >
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
                              <input type="date" name="vigencia_caat_inicio" id="vigencia_caat_inicio" class="form-control" >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="vigencia_caat_vencimiento">Vencimiento:</label>
                              <input type="date" name="vigencia_caat_vencimiento" id="vigencia_caat_vencimiento" class="form-control" >
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
                              <input type="text" name="dato_vucem_usuario" id="dato_vucem_usuario" class="form-control" >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="dato_vucem_contrasenia">Contraseña Web Services:</label>
                              <input type="text" name="dato_vucem_contrasenia" id="dato_vucem_contrasenia" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="card-header">
                        <h3 class="card-title">Información de Contacto</h3>
                    </div>


                    <div class="form-group">
                        <label for="representante_legal">Nombre del Representante Legal:</label>
                        <input type="text" name="representante_legal" id="representante_legal" class="form-control" >
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" name="email" id="email" class="form-control" >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="telefono">Teléfono:</label>
                              <input type="tel" name="telefono" id="telefono" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="form-group">
                        <label for="contacto_cuentas">Nombre del contato de cuentas por pagar:</label>
                        <input type="text" name="contacto_cuentas" id="contacto_cuentas" class="form-control" >
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="email_cuentas">Email:</label>
                              <input type="email" name="email_cuentas" id="email_cuentas" class="form-control" >
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="telefono_cuentas">Teléfono:</label>
                              <input type="tel" name="telefono_cuentas" id="telefono_cuentas" class="form-control" >
                            </div>
                          </div>
                        </div>
                      </div>
                      @can('admin', Auth::user())
                    <div class="card-header">
                        <h3 class="card-title">Para uso exclusivo de Validacarga </h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <h6>Para Tráfico Aéreo</h6>

                            <div class="row">
                              <div class="col">

                                <div class="form-group">
                                  <label for="uso_exclusivo_tarifa">Tarifa:</label>
                                  <input type="text" name="uso_exclusivo_tarifa" id="uso_exclusivo_tarifa" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="uso_exclusivo_referencia">Referencia Bancaria:</label>
                                  <input type="text" name="uso_exclusivo_referencia" id="uso_exclusivo_referencia" class="form-control" >
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="uso_exclusivo_id">ID Promotora:</label>
                                  <input type="text" name="uso_exclusivo_id" id="uso_exclusivo_id" class="form-control" >
                                </div>
                              </div>
                            </div>

                            <h6>Para Tráfico Marítimo</h6>

                            <div class="row">
                                <div class="col">

                                    <div class="form-group">
                                        <label for="uso_exclusivo_tarifa_maritimo">Tarifa (Marítimo):</label>
                                        <input type="text" name="uso_exclusivo_tarifa_maritimo" id="uso_exclusivo_tarifa_maritimo" class="form-control">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="uso_exclusivo_referencia_maritimo">Referencia Bancaria (Marítimo):</label>
                                        <input type="text" name="uso_exclusivo_referencia_maritimo" id="uso_exclusivo_referencia_maritimo" class="form-control">
                                    </div>
                                </div>


                            </div>



                          </div>
                          @endcan
                          <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary" name="guardar" id="btnGuardar" disabled>Guardar</button>


        {{--                             <button type="submit" class="btn btn-danger" name="enviar" id="btnEnviar" disabled>Enviar</button>
        --}}                </div>
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
                    campo !== document.getElementById('uso_exclusivo_id')
                ) {
                    return false;
                }
            }
            return true;
        }

        // Agregar evento "input" a todos los campos para verificar cuando el usuario ingresa información
        const camposInput = document.querySelectorAll('input[type="text"], input[type="number"], input[type="email"], input[type="tel"], input[type="password"]');
        for (const campo of camposInput) {
            campo.addEventListener('input', function () {
                const btnEnviar = document.getElementById('btnGuardar');
                btnEnviar.disabled = !verificarCamposLlenos();
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


        @stop
        @else
        @section('content')
        <div class="alert alert-danger" role="alert">
            Debes iniciar sesión para acceder a este formulario.
        </div>
        @stop

        @endif

     <script>
        // Agrega un evento al formulario para que se ejecute cuando se envía
        document.addEventListener('DOMContentLoaded', function () {
        const guardarButton = document.getElementById('guardarButton');

        // Agrega un evento clic al botón "Guardar"
        guardarButton.addEventListener('click', function (event) {
            event.preventDefault(); // Previene el envío del formulario

            // Realiza aquí cualquier otra acción que necesites antes de abrir una nueva ventana

            // Abre una nueva ventana
            const nuevaVentana = window.open('', '_blank');

            // Cambia la URL de la nueva ventana a donde desees redirigir
            nuevaVentana.location.href = '/ingresar-folio';

            // Cierra la ventana actual
            window.close();

            window.onunload = function() {};
        });
        });
    </script>






