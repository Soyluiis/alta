@extends('adminlte::page')

@section('title', 'Editar Agente')

@section('content_header')
    <h1 class="text-center">Edicion de Agente</h1>
@stop

@section('content')
<div class="d-flex justify-content-center align-items-start vh-100">
    <div class="card w-50 mt-5">
        <div class="card-header">
            <h1 class="card-title">Editar Agente</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST" autocomplete="off">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required maxlength="30" value="{{ $user->name ?? '' }}">
                    <!-- Mostrar el nombre del usuario si existe -->
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" autocomplete="off" value="{{ $user->email ?? '' }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        <!-- Mostrar un mensaje de error si el correo ya fue dado de alta -->
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control" required minlength="8" placeholder="Contraseña" autocomplete="off" value="{{ $user->password ?? '' }}">
                    <!-- Mostrar la contraseña del usuario si existe -->
                </div>

                <div class="form-group">
                    <label for="role">Rol:</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="" selected disabled>Selecciona un rol</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" {{ $user->role_id == $role->id ? 'selected' : '' }}>
                                {{ $role->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-danger">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
