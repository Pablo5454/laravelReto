<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('viajes.index')}}">Volver</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $rescate->id }}</td>
                    <td>{{ $rescate->fechaInicio }}</td>
                    <td>{{ $rescate->fechaFin }}</td>
            
                </tr>
        </tbody>
    </table>
</body>
</html>