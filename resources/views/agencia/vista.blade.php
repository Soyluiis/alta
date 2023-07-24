@extends('adminlte::page')

@section('title', 'Lista de Altas')
@section('content')
   @section('content_header')
    <h1>Lista de Altas</h1>
@stop

@section('content')
<div class="card">
   <div class="card-header">
    <h1 class="card-title">Lista de Altas</h1>
   </div>
   @if (session('success'))
   <div class="alert alert-success" role="success">
       {{session('success')}}
   </div>

   @endif
  <div class="card-body">
    <form action="#" method="POST">
        @csrf

        <div class="table-responsive">
            <table class="table">
                <thead class="text-danger">
                    <th>ID</th>
                    <th>Nombre Fiscal</th>
                    <th>No. CAAT</th>
                    <th>Usuario VUCEM</th>
                    <th>Representante</th>
                    <th>Telefono</th>
                    <th class="text-right">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($vistas as $vista)
                    <tr>
                        <td>{{ $vista->id }}</td>
                        <td>{{ $vista->nombre_fiscal }}</td>
                        <td>{{ $vista->no_caat }}</td>
                        <td>{{ $vista->dato_vucem_usuario }}</td>
                        <td>{{ $vista->representante_legal }}</td>
                        <td>{{ $vista->telefono }}</td>
                        <td class= "text-right">
                            <button class="btn-sm btn-info" type="button">
                                <i class="fas fa-fw fa-caret-down"></i>
                            </button>
                            <button class="btn-sm btn-warning" type="button">
                                <i class="fas fa-fw fa-pen"></i>
                            </button>
                            <button class="btn-sm btn-danger" type="button">
                                <i class="fas fa-fw fa-eraser"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            {{ $vistas->links() }}
        </div>
    </form>
</div>
@stop
