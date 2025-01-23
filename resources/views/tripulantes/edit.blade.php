<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('_partials.menu')
    <br>
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
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('tripulantes.index')}}" class="btn" style="
            background-color: #ffdd59;
            color: #333;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s ease;">Volver</a>
    </div>
</body>
</html>