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
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $rescatados->id }}</td>
                    <td>{{ $rescatados->nombre }}</td>
                    <td>{{ $rescatados->apellido }}</td>
                    <td>{{ $rescatados->fecha_incorporacion }}</td>
                    <td>{{ $rescatados->vrol}}</td>
            
                </tr>
        </tbody>
    </table>
</body>
</html>