@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('rescates.store')}}" method="post">
        @csrf
        <label>Fecha inicio:</label>
        <input type="text" name="fecha_inicio"/>
        @error('fecha_inicio')
        <div class="text-danger">Campo requerido</div>
        @enderror
        <label>Fecha fin:</label>
        <input type="text" name="fecha_fin"/>
        @error('fecha_fin')
        <div class="text-danger">Campo requerido</div>
        @enderror
        <ul>
@foreach ($viajes as $viaje)
    <li>{{ $viaje->id }}</li>
@endforeach
</ul>
<div class="d-flex justify-content-center align-items-center">
    <input type="submit" value="Crear" 
    />


    <a href="{{ route('rescates.index') }}" class="btn btn-volver">
        Volver
    </a>
</div>
    </form>

</body>
</html>