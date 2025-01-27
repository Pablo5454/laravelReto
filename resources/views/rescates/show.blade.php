@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Viaje</th>

            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $rescate->id }}</td>
                    <td>{{ $rescate->fecha_inicio }}</td>
                    <td>{{ $rescate->fecha_fin }}</td>
                    <td>{{ $rescate->viaje_id }}</td>

            
                </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('rescates.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>