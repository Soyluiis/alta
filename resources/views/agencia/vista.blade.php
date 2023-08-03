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
   @if (session('error'))
   <div class="alert alert-danger" role="success">
       {{session('error')}}
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

                            <a href="{{route('show',$vista->id)}}" class="btn btn-info"> <i class="fas fa-fw fa-eye"></i></a>
                            @if(!$vista->enviado)
                            
                            <a href="{{route('edit',$vista->id)}}" class="btn btn-warning"> <i class="fas fa-fw fa-pen"></i></a>
                            <form action="{{ route('cargas.destroy', $vista->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')" title="Eliminar"><i class="fas fa-fw fa-eraser"></i></button>
                            </form>
                            @endif


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
