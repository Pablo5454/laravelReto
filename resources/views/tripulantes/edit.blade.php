<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('tripulantes.index')}}">Volver</a>
    <form action="{{route('tripulantes.update', $tripulante -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{$tripulante->nombre}}"/>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{$tripulante->apellido}}"/>
        <label>Rol:</label>
        <input type="text" name="rol" value="{{$tripulante->rol}}"/>
        <label>Fecha de incorporación:</label>
        <input type="text" name="fechaIncorporacion" value="{{$tripulante->fechaIncorporacion}}"/>
        <label>Viaje:</label>
        <input type="text" name="viajeId" value="{{$tripulante->viajeId}}"/>
        <input type="submit" value="Editar"/>

    </form>
</body>
</html>