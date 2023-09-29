@extends('adminlte::page')

@section('title', 'Usuarios con Folio Asignado')

@section('content')
<div class="card">
    <div class="card-header">
        <h1 class="card-title">Usuarios con Folio Asignado</h1>
    </div>
    @if (session('success'))
        <div class="alert alert-success" role="success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Folio</th>
                        <th>Creado por</th>
                        <th>Fecha de Vencimiento</th>

                        <th>Usados</th>
                        <th class="text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->folio }}</td>
                            <td>{{ $user->capturador }}</td> <!-- Acceder al usuario creador -->
                            <td>{{ $user->fecha_vencimiento }}</td>

                            <td>
                                @if ($user->used_folio)
                                    Agotados
                                @else
                                    {{ 5 - $user->folio_usos }} intentos restantes
                                @endif
                            </td>
                            <td class="text-right">
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
    </div>
</div>
@stop
