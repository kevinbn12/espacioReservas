@extends('layout')
@section('contenido')
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1 class="h3 mb-0">Lista de espacios</h1>
		<a href="{{ route('espacios.create') }}" class="btn btn-primary">Nuevo espacio</a>
	</div>
	<div class="card shadow-sm">
		<div class="card-body p-0">
			<table class="table table-striped table-hover align-middle mb-0">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Capacidad</th>
						<th>Ubicacion</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($espacios as $espacio)
						<tr>
							<td>{{ $espacio->id }}</td>
							<td>{{ $espacio->nombre }}</td>
							<td>{{ $espacio->tipo }}</td>
							<td>{{ $espacio->capacidad }}</td>
							<td>{{ $espacio->ubicacion }}</td>
							<td class="text-nowrap">
								<a href="{{ route('espacios.edit', $espacio->id) }}" class="btn btn-sm btn-outline-secondary me-1">Editar</a>
								<form action="{{ route('espacios.destroy', $espacio->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Está seguro que desea eliminar al espacio {{ $espacio->nombre }} ?')">
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