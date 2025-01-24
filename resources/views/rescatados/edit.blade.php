
@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('rescatados.update', $rescatado -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{$rescatado->nombre}}"/>
        <label>Foto:</label>
        <input type="text" name="foto" value="{{$rescatado->foto}}"/>
        <label>Edad:</label>
        <input type="text" name="edad" value="{{$rescatado->edad}}"/>
        <label>Sexo:</label>
        <input type="text" name="sexo" value="{{$rescatado->sexo}}"/>
        <label>Procedencia:</label>
        <input type="text" name="procedencia" value="{{$rescatado->procedencia}}"/>
        <label>Valoración médica:</label>
        <input type="text" name="valoracion_medica" value="{{$rescatado->valoracion_medica}}"/>
        <label>Médico Id:</label>
        <input type="text" name="medico_id" value="{{$rescatado->medico_id}}"/>
        <label>Rescate Id:</label>
        <input type="text" name="rescate_id" value="{{$rescatado->rescate_id}}"/>

        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('rescatados.index')}}" class="btn btn-volver" >Volver</a>
    </div>
</body>
</html>