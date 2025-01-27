@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('tripulantes.store')}}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
            @error('nombre')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Apellido:</label>
        <input type="text" name="apellido"/>
            @error('apellido')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Rol:</label>
        <input type="text" name="rol"/>
            @error('rol')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Fecha de incorporación:</label>
        <input type="text" name="fecha_incorporacion"/>
            @error('fecha_incorporacion')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Viaje:</label>
            <select name="viaje_id">
                <option value="" disabled selected>Selecciona un viaje</option>
                @foreach ($viajes as $viaje)
                    <option value="{{ $viaje->id }}">{{ $viaje->id }} : {{ $viaje->origen }} - {{ $viaje->destino }}</option>
                @endforeach
            </select>
            @error('viaje_id')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <br>
        <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">

            <input type="submit" value="Crear" 
            />
        
            <a href="{{ route('tripulantes.index') }}" class="btn btn-volver">
                Volver
            </a>
        </div>

    </form>

</body>
</html>