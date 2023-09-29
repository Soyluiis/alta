@extends('adminlte::page')

@section('title', 'Lista de General de Usuarios y Folios')

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
                    <th>Creado</th>
                    <th>Actualizado</th>
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


                            <a href="{{route('ushow',$user->id)}}" class="btn btn-info"> <i class="fas fa-fw fa-eye"></i></a>
                            <a href="{{route('uedit',$user->id)}}" class="btn btn-warning"> <i class="fas fa-fw fa-pen"></i></a>


                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn-sm btn-danger" type="submit">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>
                            </form>
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
