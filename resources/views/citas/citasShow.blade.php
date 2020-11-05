
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de la Cita</title>
</head>
<body>
    <a href="{{ route('citas.index') }}">Listado de citas</a>
    <a href="{{ route('citas.edit', [$cita->id]) }}">Editar cita</a>

    <form action="{{ route('citas.destroy', [$cita]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>

    <hr>
    <h1>Cita {{ $cita->id }}</h1>
    <ul>
        <li>Fecha: {{ $cita->fecha }}</li>
        <li>Estilista: {{ $cita->estilista }}</li>
        <li>Cliente: {{ $cita->cliente }}</li>
        <li>Tratamiento: {{ $cita->tratamiento }}</li>
    </ul>
</body>
</html>