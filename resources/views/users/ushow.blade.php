@extends('adminlte::page')

@section('title', 'Detalles de Agente')

@section('content')
<div class="d-flex justify-content-center align-items-start vh-100">
    <div class="card w-50 mt-5" style="padding: 1rem; font-size: 1rem;">
        <div class="card-header" style="padding: 0.5rem 1rem; font-size: 1rem;">
            <h1 class="card-title">Detalles de Agente</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">




                                            <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Nombre:</h5>
                                            <p>{{ $user->name }}</p>
                                            <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Correo Electrónico:</h5>
                                            <p>{{ $user->email }}</p>
                                            <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Contraseña:</h5>
                                            <p>{{ str_repeat("*", strlen($user->password)) }}</p>
                                            <h5 class="title mt-3" style="font-size: 1.2rem; font-weight: bold;">Rol:</h5>
                                            <p>{{ $user->role }}</p>
                                            <div class="text-right">
                                                <a href="{{ route('uedit', $user->id) }}" class="btn btn-danger mr-2">Editar</a>
                                                <a href="{{ route('indes') }}" class="btn btn-danger">Volver</a>
                                            </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
