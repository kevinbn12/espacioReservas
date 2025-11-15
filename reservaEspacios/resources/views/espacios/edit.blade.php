@extends('layout')

@section('title', 'Editar Espacio')

@section('contenido')
    <h1 class="mb-4">Editar Espacio</h1>

    <form method="POST" action="{{ route('espacios.update', $espacio) }}" class="row g-3">
        @csrf
        @method('PUT')
        @include('espacios.partials.form', ['espacio' => $espacio])
        <div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
    </form>
@endsection