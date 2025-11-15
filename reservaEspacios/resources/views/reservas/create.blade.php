@extends('layout')
@section('title', 'Crear Reserva')
@section('contenido')
    <h1 class="mb-4">Crear Nueva Reserva</h1>

   <form method="POST" action="{{ route('reservas.store') }}" class="row g-3">
        @csrf
        @include('reservas.partials.form')
        <div>
            <button type="submit" class="btn btn-primary">Guardar Reserva</button>
        </div>
    </form>
  @endsection