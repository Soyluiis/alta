@extends('adminlte::page')
@php
    $totalUsers = App\Models\User::whereNull('folio')->count();
    $totalFormats = App\Models\AgenciaCarga::count();
    $activeFolios = App\Models\User::whereNotNull('folio')->count();
    $notSentAgenciaCarga = App\Models\AgenciaCarga::where('enviado', false)->count();

@endphp
@section('title', 'Página Principal')

@section('content_header')
    <h1>Página Principal</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios Registrados:</span>
                        <span class="info-box-number">{{ $totalUsers }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-success"><i class="fas fa-file-alt"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Cantidad de Formatos:</span>
                        <span class="info-box-number">{{ $totalFormats }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-key"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Folios Sin Usar:</span>
                        <span class="info-box-number">{{ $activeFolios }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-danger"><i class="fas fa-times-circle"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Altas Pendientes de Envio:</span>
                        <span class="info-box-number">{{ $notSentAgenciaCarga }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
