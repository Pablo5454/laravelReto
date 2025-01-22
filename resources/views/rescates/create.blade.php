<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('rescates.index')}}">Volver</a>
    <form action="{{route('rescates.store')}}" method="post">
        @csrf
        <label>Fecha inicio:</label>
        <input type="text" name="fechaInicio"/>
        <label>Fecha fin:</label>
        <input type="text" name="fechaFin"/>
        <input type="submit" value="Crear"/>
    </form>
</body>
</html>