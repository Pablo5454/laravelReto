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
    <form action="{{route('tripulantes.store')}}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <label>Apellido:</label>
        <input type="text" name="apellido"/>
        <label>Rol:</label>
        <input type="text" name="rol"/>
        <label>Fecha de incorporación:</label>
        <input type="text" name="fechaIncorporacion"/>
        <label>Viaje:</label>
        <input type="text" name="viajeId"/>
        <input type="submit" value="Crear"/>

    </form>
</body>
</html>