@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('viajes.store')}}" method="post">
        @csrf
        <label>Origen:</label>
        <input type="text" name="origen"/>
        @error('origen')
        <div class="text-danger">Campo requerido</div>
        @enderror
        <label>Destino:</label>
        <input type="text" name="destino"/>
        @error('destino')
        <div class="text-danger">Campo requerido</div>
        @enderror

        <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">

            <input type="submit" value="Crear" />
        
            <a href="{{ route('viajes.index') }}" class="btn btn-volver">
                Volver
            </a>
        </div>
    </form>

</body>
</html>