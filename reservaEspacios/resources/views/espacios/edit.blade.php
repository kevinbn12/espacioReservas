@extends('layout')

@section('title', 'Editar Espacio')

@section('contenido')
    <h1 class="h3 mb-4">Editar Espacio</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('espacios.update', $espacio) }}" class="row g-3">
                @csrf
                @method('PUT')
                @include('espacios.partials.form', ['espacio' => $espacio])
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    <a href="{{ route('espacios.index') }}" class="btn btn-outline-secondary ms-2">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection