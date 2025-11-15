@extends('layout')

@section('title', 'Reserva de Espacios')

@section('contenido')
	<div class="row justify-content-center">
		<div class="col-lg-8">
			<div class="text-center py-5">
				<h1 class="display-5 fw-bold mb-3">Sistema de Reserva de Espacios</h1>
				<p class="lead mb-4">
					Administra fácilmente los espacios disponibles y registra las reservas
					para reuniones, clases o eventos especiales.
				</p>
				<div class="d-flex flex-column flex-sm-row justify-content-center gap-2 mb-4">
					<a href="{{ route('reservas.create') }}" class="btn btn-primary btn-lg">Reservar un espacio</a>
					<a href="{{ route('reservas.index') }}" class="btn btn-outline-primary btn-lg">Ver reservas</a>
				</div>
				<div class="d-flex flex-column flex-sm-row justify-content-center gap-2">
					<a href="{{ route('espacios.index') }}" class="btn btn-outline-secondary">Administrar espacios</a>
				</div>
			</div>
		</div>
	</div>
@endsection