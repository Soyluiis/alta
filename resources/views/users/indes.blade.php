@extends('adminlte::page')

@section('title', 'Lista de Agentes')

@section('content')
   @section('content_header')
    <h1>Lista de Agentes</h1>
@stop

@section('content')
<div class="card">
   <div class="card-header">
    <h1 class="card-title">Lista de Agentes</h1>
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

        <div class="card-header card-header-primary">
            <h4 class="card-title">Usuarios</h4>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="text-danger">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Rol</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th class="text-right">Acciones</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                {{ $role->name }}<br>
                            @endforeach
                        </td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
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
            {{ $users->links() }}
        </div>
    </form>
</div>
@stop
