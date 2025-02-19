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
                <th>Rol</th>
                <th>Fecha de Incorporación</th>
                <th>Viaje Asociado</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $tripulante->id }}</td>
                    <td>{{ $tripulante->nombre }}</td>
                    <td>{{ $tripulante->apellido }}</td>
                    <td>{{ $tripulante->rol }}</td>
                    <td>{{ $tripulante->fecha_incorporacion }}</td>
                    <td>{{ $tripulante->viaje_id }}</td>
            
                </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('tripulantes.index')}}" class="btn btn-volver">Volver</a>
    </div>
</body>
</html>