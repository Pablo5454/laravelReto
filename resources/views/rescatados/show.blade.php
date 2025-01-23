<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('rescatados.index')}}">Volver</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Edad</th>
                <th>Procedencia</th>
                <th>Valoración médica</th>
                <th>Médico Id</th>
                <th>Rescate Id</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $rescatado->id }}</td>
                    <td>{{ $rescatado->nombre }}</td>
                    <td>{{ $rescatado->foto }}</td>
                    <td>{{ $rescatado->edad }}</td>
                    <td>{{ $rescatado->procedencia}}</td>
                    <td>{{ $rescatado->valoracion_medica }}</td>
                    <td>{{ $rescatado->medico_id}}</td>
                    <td>{{ $rescatado->rescate_id}}</td>

                </tr>
        </tbody>
    </table>
</body>
</html>