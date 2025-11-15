@extends('layout')

@section('title', 'Crear Espacio')

@section('contenido')
    <h1 class="h3 mb-4">Crear Nuevo Espacio</h1>
    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" action="{{ route('espacios.store') }}" class="row g-3">
                @csrf
                @include('espacios.partials.form')
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Guardar Espacio</button>
                    <a href="{{ route('espacios.index') }}" class="btn btn-outline-secondary ms-2">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection