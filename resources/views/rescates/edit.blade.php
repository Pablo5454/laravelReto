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
    <form action="{{route('rescates.update', $rescate -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Fecha inicio:</label>
        <input type="text" name="fechaInicio" value="{{$rescate->fechaInicio}}"/>
        <label>Fecha fin:</label>
        <input type="text" name="fechaFin" value="{{$rescate->fechaFin}}"/>
        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('rescates.index')}}" class="btn" style="
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