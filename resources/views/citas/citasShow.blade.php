@extends('layouts.tabler')

@section('content')

    <h1> Datos de la cita: </h1>

    <h3>Cita número: {{ $cita->id }}</h3>
    <ul>
        <li>Fecha: {{ $cita->fecha }}</li>
        <li>Estilista: {{ $cita->estilista }}</li>
        <li>Cliente: {{ $cita->cliente }}</li>
        <li>Tratamiento: {{ $cita->tratamiento }}</li>
    </ul>

    <a href="{{ route('citas.index') }}">Listado de citas</a>
    <br>
    <a href="{{ route('citas.edit', [$cita->id]) }}">Editar cita</a>

    <form action="{{ route('citas.destroy', [$cita]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>

@endsection