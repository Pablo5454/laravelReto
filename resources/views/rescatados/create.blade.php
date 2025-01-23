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

    <a href="{{route('rescatados.index')}}">Volver</a>
    <form action="{{route('rescatados.store') }}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <label>Foto:</label>
        <input type="text" name="foto" >
        <label>Edad:</label>
        <input type="text" name="edad" />
        <label>Sexo:</label>
        <input type="text" name="sexo" />
        <label>Procedencia:</label>
        <input type="text" name="procedencia" />
        <label>Valoración médica:</label>
        <input type="text" name="valoracion_medica" />
        <label>Médico Id:</label>
        <input type="text" name="medico_id" />
        <label>Rescate Id:</label>
        <input type="text" name="rescate_id" />

        <input type="submit" value="Crear"/>

    </form>
</body>
</html>