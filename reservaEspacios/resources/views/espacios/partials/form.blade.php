@php 
    $e = $espacio ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $e?->nombre) }}">
    @error('nombre') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control @error('tipo') is-invalid @enderror" value="{{ old('tipo', $e?->tipo) }}">
    @error('tipo') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label">Capacidad</label>
    <input type="number" name="capacidad" class="form-control @error('capacidad') is-invalid @enderror" value="{{ old('capacidad', $e?->capacidad) }}">
    @error('capacidad') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label class="form-label">Ubicación</label>
    <input type="text" name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" value="{{ old('ubicacion', $e?->ubicacion) }}">
    @error('ubicacion') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

