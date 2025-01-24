
    @include('_partials.inicio')
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Incorporación</th>
                <th>Viaje Asociado</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $medico->id }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    <td>{{ $medico->fecha_incorporacion }}</td>
                    <td>{{ $medico->viaje_id }}</td>
            
                </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('medicos.index')}}" class="btn btn-volver ">Volver</a>
    </div>
</body>
</html>