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
        <input type="text" name="fecha_incorporacion" value="{{$tripulante->fecha_incorporacion}}"/>
        <label>Viaje:</label>
        <select name="viaje_id">
            <option value="{{$tripulante->viaje_id}}" disabled selected>{{$tripulante->viaje_id}}</option>
            @foreach ($viajes as $viaje)
                <option value="{{ $viaje->id }}">{{ $viaje->id }} : {{ $viaje->origen }} - {{ $viaje->destino }}</option>
            @endforeach
        </select>
        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('tripulantes.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>