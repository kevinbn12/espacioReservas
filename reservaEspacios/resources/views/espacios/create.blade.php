@extends('layout')

@section('title', 'Crear Espacio')

@section('contenido')
    <h1 class="mb-4">Crear Nueva Espacio</h1>

   <form method="POST" action="{{ route('espacios.store') }}" class="row g-3">
        @csrf
        @include('espacios.partials.form')
        <div>
            <button type="submit" class="btn btn-primary">Guardar Espacio</button>
        </div>
    </form>
    @endsection