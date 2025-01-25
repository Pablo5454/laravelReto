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