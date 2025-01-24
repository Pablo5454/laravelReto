
@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
@include('_partials.menu')
    <br>
    <form action="{{route('rescatados.store') }}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
            @error('nombre')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Foto:</label>
        <input type="text" name="foto" >
            @error('foto')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Edad:</label>
        <input type="text" name="edad" />
            @error('edad')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Sexo:</label>
        <input type="text" name="sexo" />
            @error('sexo')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Procedencia:</label>
        <input type="text" name="procedencia" />
            @error('procedencia')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Valoración médica:</label>
        <input type="text" name="valoracion_medica" />
            @error('valoracion_medica')
            <div class="text-danger">Campo requerido</div>
            @enderror
        <label>Medico:</label>
        <select name="medico_id">
            <option value="" disabled selected>Selecciona un medico</option>
            @foreach ($medicos as $medico)
                <option value="{{ $medico->id }}">{{ $medico->id }} - {{ $medico->nombre }} </option>
            @endforeach
        </select>
        @error('medico_id')
        <div class="text-danger">Campo requerido</div>
        @enderror
        <label>Rescate:</label>
        <select name="rescate_id">
            <option value="" disabled selected>Selecciona un rescate</option>
            @foreach ($rescates as $rescate)
                <option value="{{ $rescate->id }}">{{ $rescate->id }}  </option>
            @endforeach
        </select>
        @error('rescate_id')
        <div class="text-danger">Campo requerido</div>
        @enderror
        <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">

            <input type="submit" value="Crear" 
            />
        
            <a href="{{ route('rescatados.index') }}" class="btn btn-volver" >
                Volver
            </a>
        </div>

    </form>

</body>
</html>