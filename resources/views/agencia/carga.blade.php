@extends('adminlte::page')

@section('title', 'Alta de Información')
@section('content')
   @section('content_header')
    <h1>Formato de Alta</h1>
@stop
@section('content')
   <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Información de la Agencia de Carga</h3>
                </div>
               

                <div class="card-body">
                    <form action="{{ route('cargas.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombre_fiscal">Nombre Fiscal de la Agencia de Carga:</label>
                            <input type="text" name="nombre_fiscal" id="nombre_fiscal" class="form-control" required>
                        </div>


                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="rfc">R.F.C:</label>
                                  <input type="text" name="rfc" id="rfc" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="no_caat">No. CAAT:</label>
                                  <input type="text" name="no_caat" id="no_caat" class="form-control" required>
                                </div>
                              </div>
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="nombre_comercial">Nombre Comercial de la Agencia de Carga:</label>
                            <input type="text" name="nombre_comercial" id="nombre_comercial" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="calle">Calle o Avenida:</label>
                            <input type="text" name="calle" id="calle" class="form-control" required>
                        </div>



                        <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="numero_exterior">N° Exterior:</label>
                                  <input type="text" name="numero_exterior" id="numero_exterior" class="form-control" required>
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
                                  <input type="text" name="colonia" id="colonia" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="codigo_postal">Codigo Postal:</label>
                                  <input type="text" name="codigo_postal" id="codigo_postal" class="form-control" required>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="delegacion">Delegación/Mpio/Prov:</label>
                                  <input type="text" name="delegacion" id="delegacion" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="estado">Estado:</label>
                                  <input type="text" name="estado" id="estado" class="form-control" required>
                                </div>
                              </div>
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
                                  <input type="text" name="banco" id="banco" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="cuenta">Cuenta Bancaria:</label>
                                  <input type="text" name="cuenta" id="cuenta" class="form-control" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="metodo_pago">Método de Pago:</label>
                                  <input type="text" name="metodo_pago" id="metodo_pago" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="regimen_fiscal">Régimen Fiscal:</label>
                                  <input type="text" name="regimen_fiscal" id="regimen_fiscal" class="form-control" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-group">
                                  <label for="forma_pago">Forma de Pago (sólo acepta números):</label>
                                  <input type="number" name="forma_pago" id="forma_pago" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="uso_cfdi">Uso de CFDI:</label>
                                  <input type="text" name="uso_cfdi" id="uso_cfdi" class="form-control" required>
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
                              <input type="text" name="tipo_alta" id="tipo_alta" class="form-control" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="metodo_transmision">Método de Transmisión:</label>
                              <input type="text" name="metodo_transmision" id="metodo_transmision" class="form-control" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="correo_acceso">Correo de Acceso al Portal:</label>
                              <input type="email" name="correo_acceso" id="correo_acceso" class="form-control" required>
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
                              <input type="date" name="vigencia_caat_inicio" id="vigencia_caat_inicio" class="form-control" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="vigencia_caat_vencimiento">Vencimiento:</label>
                              <input type="date" name="vigencia_caat_vencimiento" id="vigencia_caat_vencimiento" class="form-control" required>
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
                              <input type="text" name="dato_vucem_usuario" id="dato_vucem_usuario" class="form-control" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="dato_vucem_contrasenia">Contraseña Web Services:</label>
                              <input type="password" name="dato_vucem_contrasenia" id="dato_vucem_contrasenia" class="form-control" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="card-header">
                        <h3 class="card-title">Información de Contacto</h3>
                    </div>


                    <div class="form-group">
                        <label for="representante_legal">Nombre del Representante Legal:</label>
                        <input type="text" name="representante_legal" id="representante_legal" class="form-control" required>
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="telefono">Teléfono:</label>
                              <input type="tel" name="telefono" id="telefono" class="form-control" required>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div class="form-group">
                        <label for="contacto_cuentas">Nombre del contato de cuentas por pagar:</label>
                        <input type="text" name="contacto_cuentas" id="contacto_cuentas" class="form-control" required>
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label for="email_cuentas">Email:</label>
                              <input type="email" name="email_cuentas" id="email_cuentas" class="form-control" required>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label for="telefono_cuentas">Teléfono:</label>
                              <input type="tel" name="telefono_cuentas" id="telefono_cuentas" class="form-control" required>
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
                                  <input type="text" name="uso_exclusivo_tarifa" id="uso_exclusivo_tarifa" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="uso_exclusivo_referencia">Referencia Bancaria:</label>
                                  <input type="text" name="uso_exclusivo_referencia" id="uso_exclusivo_referencia" class="form-control" required>
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-group">
                                  <label for="uso_exclusivo_id">ID Promotora:</label>
                                  <input type="text" name="uso_exclusivo_id" id="uso_exclusivo_id" class="form-control" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group float-right">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="submit" class="btn btn-danger" name="enviar">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
