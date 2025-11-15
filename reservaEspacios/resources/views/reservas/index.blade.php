@extends('layout')
@section('contenido')
    <h1>Lista de reservas</h1>
    <a href="{{route('reservas.create')}}" class="btn btn-primary">Nueva reserva</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Solicitante</th>
                <th>Espacio</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Fin</th>
                <th>Motivo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
                <tr>
                    <td>{{$reserva->id}}</td>
                    <td>{{$reserva->solicitante}}</td>
                    <td>{{$reserva->espacio->nombre}}</td>
                    <td>{{$reserva->fecha}}</td>
                    <td>{{$reserva->hora_inicio}}</td>
                    <td>{{$reserva->hora_fin}}</td>
                    <td>{{$reserva->motivo}}</td>
                    <td>
                        <a href="{{route('reservas.edit', $reserva->id)}}" class="btn btn-warning">Editar</a>
                        <form action="{{route('reservas.destroy', $reserva->id)}}" method="POST" style="display:inline">
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