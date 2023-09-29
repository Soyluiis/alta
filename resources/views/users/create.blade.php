@extends('adminlte::page')

@section('title', 'Alta de Información')

@section('content_header')
    <h1 class="text-center">Alta de Agentes</h1>
@stop

@section('content')
<div class="d-flex justify-content-center align-items-start vh-100">
    <div class="card w-25 mt-5">
        <div class="card-header">
            <h1 class="card-title text-center">Alta de Información</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST" autocomplete="off">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required maxlength="30">
                    <!-- Agregamos el atributo "maxlength" para limitar el nombre a 30 caracteres -->
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" autocomplete="new-email-field">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <!-- Mostramos un mensaje de error si el correo ya fue dado de alta -->
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="8" placeholder="Contraseña" autocomplete="new-password-field">
                    <!-- Agregamos el atributo "minlength" para especificar una contraseña de mínimo 8 caracteres -->
                </div>

                <div class="form-group">
                    <label for="role">Rol:</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="" selected disabled>Selecciona un rol</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>
    </div>
</div>

{{-- Agregar las metaetiquetas para evitar el almacenamiento en caché --}}
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">


<script>
    $(document).ready(function() {
        // Desactivar el autocompletado de los campos
        $("#email").attr("autocomplete", "new-email-field");
        $("#password").attr("autocomplete", "new-password-field");

        // Habilitar los campos de correo electrónico y contraseña al cargar la página
        document.getElementById('email').removeAttribute('readonly');
        document.getElementById('password').removeAttribute('readonly');
    });
</script>

@endsection
