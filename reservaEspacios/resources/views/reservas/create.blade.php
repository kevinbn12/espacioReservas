@extends('layout')
@section('title', 'Crear Reserva')
@section('contenido')
    <h1 class="h3 mb-4">Crear Nueva Reserva</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('reservas.store') }}" class="row g-3">
                @csrf
                @include('reservas.partials.form')
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar Reserva</button>
                    <a href="{{ route('reservas.index') }}" class="btn btn-outline-secondary ms-2">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection