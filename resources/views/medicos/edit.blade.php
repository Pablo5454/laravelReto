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
    <form action="{{route('medicos.update', $medico -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{$medico->nombre}}"/>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{$medico->apellido}}"/>
        <label>Fecha de incorporación:</label>
        <input type="text" name="fechaIncorporacion" value="{{$medico->fechaIncorporacion}}"/>
        <label>Viaje:</label>
        <input type="text" name="viajeId" value="{{$medico->viajeId}}"/>
        <input type="submit" value="Editar"/>

    </form>
</body>
</html>