<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestionador de Citas</title>
</head>
<body>
    <h1>Datos de la cita</h1>

    @if(isset($cita))
        <form action="{{ route('citas.update', [$cita]) }}" method="POST">
        @method('patch')
    @else
        <form action="{{ route('citas.store') }}" method="POST">
    @endif
        @csrf
        <label for="fecha">Fecha:</label>
        <input type="datetime-local" name="fecha" value="{{ old('fecha') ?? date('Y-m-d\TH:i:s', strtotime($cita->fecha)) ?? '' }}">
        <br>

        <label for="estilista">Estilista:</label>
        <input type="text" name="estilista" value="{{ old('estilista') ?? $cita->estilista ?? '' }}">
        <br>

        <label for="cliente">Cliente:</label>
        <input type="text" name="cliente" value="{{ old('cliente') ?? $cita->cliente ?? '' }}">
        <br>

        <label for="tratamiento">Tratamiento:</label>
        <input type="text" name="tratamiento" value="{{ old('tratamiento') ?? $cita->tratamiento ?? '' }}">
        <br>

        <button type="submit">Aceptar</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</body>
</html>