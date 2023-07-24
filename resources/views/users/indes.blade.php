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
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>
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

