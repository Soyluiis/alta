@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Material ')])

@section('content')
@section('content')

<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
        <h2 style="text-transform: uppercase; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <b>{{ __('¡Bienvenido!') }}</b><br>
            {{ __('Ingresar Folio') }}
        </h2>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('ingresar-folio') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><img src="{{ asset('material') }}/img/validablanco.png" alt="" height="60"></h4>
          </div>
          <div class="card-body">
            @if (session('success'))
              <div class="alert alert-success" role="success">
                {{ session('success') }}
              </div>
            @endif
            @if (session('error'))
              <div class="alert alert-danger" role="success">
                {{ session('error') }}
              </div>
            @endif

            <!-- Campo Folio -->
            <div class="bmd-form-group{{ $errors->has('folio') ? ' has-danger' : '' }}">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">account_circle</i>
                  </span>
                </div>
                <input type="text" name="folio" class="form-control" placeholder="{{ __('Número o Folio...') }}" id="folio-input">
              </div>
              @if ($errors->has('folio'))
                <div id="folio-error" class="error text-danger pl-3" for="folio" style="display: block;">
                  <strong>{{ $errors->first('folio') }}</strong>
                </div>
              @endif
            </div>

            <!-- Mensaje de validación -->
            <div id="folio-validation" class="error text-danger pl-3 mt-2" style="display: none; text-align: center;">
              <strong>{{ __('Favor de ingresar un folio válido.') }}</strong>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="button" class="btn btn-primary btn-link btn-lg" onclick="validarFolio()">{{ __('Entrar') }}</button>
          </div>
        </div>
      </form>
      <div class="row">
        <!-- Puedes agregar contenido adicional aquí si es necesario -->
      </div>
    </div>
  </div>
</div>



<script>
  function validarFolio() {
    const folioInput = document.querySelector('#folio-input');
    const folioValidation = document.getElementById('folio-validation');
    const botonEntrar = document.querySelector('.btn-primary');

    if (folioInput.value.trim() === '') {
      folioValidation.style.display = 'block';
      botonEntrar.disabled = true;
    } else {
      folioValidation.style.display = 'none';
      botonEntrar.disabled = false;
      // Si el folio es válido, puedes enviar el formulario aquí
      document.querySelector('form').submit();
    }
  }
</script>




@endsection

