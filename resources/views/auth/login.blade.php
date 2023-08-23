@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Material ')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-md-9 ml-auto mr-auto mb-3 text-center">
        <h2 style="text-transform: uppercase; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
            <b>{{ __('¡Bienvenido!') }}</b><br>
            {{ __('Iniciar Sesion') }}
        </h2>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
      <form class="form" method="POST" action="{{ route('login') }}">
        @csrf

        <div class="card card-login card-hidden mb-3">
          <div class="card-header card-header-primary text-center">
            <h4 class="card-title"><img src="{{ asset('material') }}/img/validablanco.png" alt="" height="60"></h4>

          </div>
          <div class="card-body">

            <div class="bmd-form-group{{ $errors->has('email') || $errors->has('folio') ? ' has-danger' : '' }}">
                <!-- Campo Email -->
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">email</i>
                        </span>
                    </div>
                    <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}">
                </div>
                @if ($errors->has('email'))
                    <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif





            <input type="hidden" name="role" value="user">
            <div class="bmd-form-group{{ $errors->has('password') ? ' has-danger' : '' }} mt-3">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                        </span>
                    </div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Contraseña...') }}">
                </div>
                @if ($errors->has('password'))
                    <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
            </div>
            <div class="form-check mr-auto ml-3 mt-3">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recuerdame') }}
                <span class="form-check-sign">
                  <span class="check"></span>
                </span>
              </label>
            </div>
          </div>
          <div class="card-footer justify-content-center">
            <button type="submit" class="btn btn-primary btn-link btn-lg">{{ __('Entrar') }}</button>
          </div>
        </div>
      </form>
      <div class="row">


      </div>
    </div>
  </div>
</div>
@endsection
