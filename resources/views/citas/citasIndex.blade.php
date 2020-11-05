<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desarrollo Web</title>
</head>
<body>
    <a href="{{ route('citas.create') }}">Crear cita</a>
    <hr>
    <table border="1">
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
                    <a href="{{ route('cita.show', [$cita]) }}">{{ $cita->id }}</a>
                </td>
                <td>{{ $cita->fecha }}</td>
                <td>{{ $cita->estilista }}</td>
                <td>{{ $cita->cliente }}</td>
                <td>{{ $cita->tratamiento }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>