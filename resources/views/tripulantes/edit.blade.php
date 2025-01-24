@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
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
        <a href="{{route('tripulantes.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>