<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('medicos.index')}}">Volver</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Incorporación</th>
                <th>Viaje Asociado</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $medico->id }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    <td>{{ $medico->fecha_incorporacion }}</td>
                    <td>{{ $medico->viaje_id }}</td>
            
                </tr>
        </tbody>
    </table>
</body>
</html>