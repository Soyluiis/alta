@extends('adminlte::page')
@php
    $totalUsers = App\Models\User::whereNull('folio')->count();
@endphp

@section('title', 'Alta de Folio')

@section('content_header')
    <h1 class="text-center">Alta de Folio</h1>
@stop

@section('content')
<div class="d-flex justify-content-center align-items-start vh-100">
    @can('admin', Auth::user())
    <div class="card w-50 mt-5">
        <div class="card-header">
            <h1 class="card-title">Ingresa el folio</h1>
        </div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="card-body">
            <form action="{{ route('alta.folio') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="capturador">Folio Generado por:  </label>
                    <input type="text" name="capturador" id="capturador" class="form-control" value="{{ auth()->user()->name }}" readonly>

                 </div>



                <div class="form-group">
                    <label for="folio">Folio:</label>
                    <input type="text" name="folio" id="folio" class="form-control" required readonly>
                </div>

                <div class="form-group">
                    <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="correo" id="correo" class="form-control" required>
                </div>

                <button type="button" class="btn btn-primary" id="generateFolio">Generar Folio</button>
                <button type="submit" class="btn btn-danger">Dar de Alta Folio</button>
            </form>
        </div>
    </div>
    @else
    <div class="alert alert-danger" role="alert">
        No tienes los permisos necesarios para acceder a esta página.
    </div>
    @endcan
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const generateButton = document.getElementById('generateFolio');
        const folioInput = document.getElementById('folio');

        generateButton.addEventListener('click', function() {
            const prefijo = 'CM001'; // Cambia esto a tu prefijo deseado

            // Generamos un número aleatorio de 4 dígitos
            const randomNum = Math.floor(Math.random() * 9000) + 1000;

            // Generamos la fecha actual en formato DDMMAAA
            const currentDate = new Date();
            const dia = String(currentDate.getDate()).padStart(2, '0');
            const mes = String(currentDate.getMonth() + 1).padStart(2, '0');
            const anio = currentDate.getFullYear();

            // Generamos el nuevo folio
            const generatedFolio = `${prefijo}-${dia}${mes}${anio}-${randomNum}`;

            // Asignamos el valor al input
            folioInput.value = generatedFolio;
        });
    });
</script>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .vh-100 {
            height: 100vh;
        }
    </style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
