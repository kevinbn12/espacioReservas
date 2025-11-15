@extends('layout')
@section('contenido')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="h3 mb-0">Lista de reservas</h1>
		<a href="{{ route('reservas.create') }}" class="btn btn-primary">Nueva reserva</a>
	</div>
	<div class="card shadow-sm">
		<div class="card-body p-0">
			<table class="table table-striped table-hover align-middle mb-0">
        <thead>
            <tr>
                <th>Id</th>
                <th>Solicitante</th>
                <th>Espacio</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->solicitante }}</td>
                    <td>{{ $reserva->espacio->nombre }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->hora_inicio }}</td>
                    <td>{{ $reserva->hora_fin }}</td>
                    <td>{{ $reserva->motivo }}</td>
                    <td class="text-nowrap">
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-sm btn-outline-secondary me-1">Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro que desea eliminar la reserva de {{ $reserva->solicitante }} ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
			</table>
		</div>
	</div>
@endsection