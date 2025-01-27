@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('rescates.update', $rescate -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Fecha inicio:</label>
        <input type="text" name="fecha_inicio" value="{{$rescate->fecha_inicio}}"/>
        <label>Fecha fin:</label>
        <input type="text" name="fecha_fin" value="{{$rescate->fecha_fin}}"/>
        <label>Viaje:</label>
        <select name="viaje_id">
            <option value="{{$rescate->viaje_id}}" disabled selected>{{$rescate->viaje_id}}</option>
            @foreach ($viajes as $viaje)
                <option value="{{ $viaje->id }}">{{ $viaje->id }} : {{ $viaje->origen }} - {{ $viaje->destino }}</option>
            @endforeach
        </select>
        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('rescates.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>