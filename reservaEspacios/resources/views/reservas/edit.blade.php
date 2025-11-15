@extends('layout')

@section('title', 'Editar Reserva')

@section('contenido')
    <h1 class="h3 mb-4">Editar Reserva</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('reservas.update', $reserva) }}" class="row g-3">
                @csrf
                @method('PUT')
                @include('reservas.partials.form', ['reserva' => $reserva])
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a class="btn btn-outline-secondary ms-2" href="{{ route('reservas.index')}}">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <br>
    
@endsection