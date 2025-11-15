@php
    $r = $reserva ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label">Solicitante</label>
    <input type="text" name="solicitante" class="form-control @error('solicitante') is-invalid @enderror" value="{{ old('solicitante', $r?->solicitante) }}">
    @error('solicitante') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Espacio</label>
    <select name="espacio_id" class="form-select @error('espacio_id') is-invalid @enderror">
        <option value="">Seleccione una Espacio</option>
        @foreach($espacios as $espacio)
            <option value="{{ $espacio->id }}" {{ old('espacio_id', $r?->espacio_id) == $espacio->id ? 'selected' : '' }}>
                {{ $espacio->nombre }}
            </option>
        @endforeach
    </select>
    @error('espacio_id') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

</div>

<div class="col-md-6">
    <label class="form-label">Fecha</label>
    <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $r?->fecha) }}">
    @error('fecha') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Hora Inicio</label>
    <input type="time" name="hora_inicio" class="form-control @error('hora_inicio') is-invalid @enderror" value="{{ old('hora_inicio', $r?->hora_inicio) }}">
    @error('hora_inicio') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Hora Fin</label>
    <input type="time" name="hora_fin" class="form-control @error('hora_fin') is-invalid @enderror" value="{{ old('hora_fin', $r?->hora_fin) }}">
    @error('hora_fin') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label class="form-label">Motivo</label>
    <input type="text" name="motivo" class="form-control @error('motivo') is-invalid @enderror" value="{{ old('motivo', $r?->motivo) }}">
    @error('motivo') 
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
