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
    <form action="{{route('viajes.update', $viaje -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Origen:</label>
        <input type="text" name="origen" value="{{$viaje->origen}}"/>
        <label>Destino:</label>
        <input type="text" name="destino" value="{{$viaje->destino}}"/>
        <input type="submit" value="Editar"/>

    </form>
</body>
</html>