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
    <form action="{{route('viajes.store')}}" method="post">
        @csrf
        <label>Origen:</label>
        <input type="text" name="origen"/>
        <label>Destino:</label>
        <input type="text" name="destino"/>
        <input type="submit" value="Crear"/>
    </form>
</body>
</html>