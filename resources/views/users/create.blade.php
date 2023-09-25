@extends('adminlte::page')

@section('title', 'Alta de Información')
@section('content')
   @section('content_header')
    <h1>Alta de Información</h1>
@stop

@section('content')
<div class="card">
   <div class="card-header">
    <h1 class="card-title">Ingresa la información</h1>
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
            <input type="email" name="email_custom" id="email" class="form-control" required placeholder="Correo electrónico" autocomplete="off">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                <!-- Mostramos un mensaje de error si el correo ya fue dado de alta -->
            @endif
        </div>

        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" name="password_custom" id="password" class="form-control" required minlength="8" placeholder="Contraseña" autocomplete="off">
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
@stop

<script>
    $(document).ready(function() {
        // Selecciona los campos de entrada por sus IDs y establece su valor en blanco
        $("#email").val("");
        $("#password").val("");
    });
</script>
@endsection




