@extends('layout')

@section('title', 'Editar Reserva')

@section('contenido')
    <h1 class="mb-4">Editar Reserva</h1>

    <form method="POST" action="{{ route('reservas.update', $reserva) }}" class="row g-3">
        @csrf
        @method('PUT')
        @include('reservas.partials.form', ['reserva' => $reserva])
        <div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
        <div class="mb-6">
            <a class="btn btn-primary" href="{{ route('reservas.index')}}">Cancelar</a>
        </div>
    </form>
    <br>
    
@endsection