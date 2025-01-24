@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Edad</th>
                <th>Procedencia</th>
                <th>Valoración médica</th>
                <th>Médico Id</th>
                <th>Rescate Id</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $rescatado->id }}</td>
                    <td>{{ $rescatado->nombre }}</td>
                    <td>{{ $rescatado->foto }}</td>
                    <td>{{ $rescatado->edad }}</td>
                    <td>{{ $rescatado->procedencia}}</td>
                    <td>{{ $rescatado->valoracion_medica }}</td>
                    <td>{{ $rescatado->medico_id}}</td>
                    <td>{{ $rescatado->rescate_id}}</td>

                </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('rescatados.index')}}" class="btn btn-volver" >Volver</a>
    </div>
</body>
</html>