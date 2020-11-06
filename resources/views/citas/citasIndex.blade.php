@extends('layouts.tabler')

@section('content')

    <h1> Listado de citas: </h1>
    <a href="{{ route('citas.create') }}"> Crear cita </a>
    <hr>
    <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Estilista</th>
            <th>Cliente</th>
            <th>Tratamiento</th>
        </tr>
        @foreach ($citas as $cita)
            <tr>
                <td>
                    <a href="{{ route('citas.show', [$cita]) }}">{{ $cita->id }}</a>
                </td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->estilista }}</td>
                <td>{{ $cita->cliente }}</td>
                <td>{{ $cita->tratamiento }}</td>
            </tr>
        @endforeach
    </table>

@endsection