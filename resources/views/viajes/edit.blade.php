@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <form action="{{route('viajes.update', $viaje -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Origen:</label>
        <input type="text" name="origen" value="{{$viaje->origen}}"/>
        <label>Destino:</label>
        <input type="text" name="destino" value="{{$viaje->destino}}"/>
        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('viajes.index')}}" class="btn" style="
            background-color: #ffdd59;
            color: #333;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s ease;">Volver</a>
    </div>
</body>
</html>