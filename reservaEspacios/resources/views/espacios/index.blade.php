@extends('layout')
@section('contenido')
    <h1>Lista de espacios</h1>
    <a href="{{route('espacios.create')}}" class="btn btn-primary">Nuevo espacio</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Ubicacion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($espacios as $espacio)
                <tr>
                    <td>{{$espacio->id}}</td>
                    <td>{{$espacio->nombre}}</td>
                    <td>{{$espacio->tipo}}</td>
                    <td>{{$espacio->capacidad}}</td>
                    <td>{{$espacio->ubicacion}}</td>
                    <td>
                        <a href="{{route('espacios.edit', $espacio->id)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('espacios.destroy', $espacio->id)}}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection