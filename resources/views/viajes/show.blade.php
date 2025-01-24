@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Origen</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $viaje->id }}</td>
                    <td>{{ $viaje->origen }}</td>
                    <td>{{ $viaje->destino }}</td>
            
                </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('viajes.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>