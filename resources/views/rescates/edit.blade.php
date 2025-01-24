@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
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
        <a href="{{route('rescates.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>