@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <a href="{{route('viajes.create')}}" class="btn ms-3" style="
    background-color: #ffdd59;
    color: #333;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    text-decoration: none;
    transition: background-color 0.3s ease;">Crear nuevo viaje</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viajes as $viaje)
                <tr>
                    <td>{{ $viaje->id }}</td>
                    <td>{{ $viaje->origen }}</td>
                    <td>{{ $viaje->destino }}</td>
                    <td>
                        <a href="{{ route('viajes.show', $viaje->id) }}" class="btn btn-info btn-sm" style="
                            padding: 5px 10px;
                            font-size: 0.875rem;
                            font-weight: bold;
                            border: none;
                            background-color: #17a2b8;
                            color: white;
                            text-decoration: none;
                            transition: background-color 0.3s ease;">
                            Ver
                        </a>
                        
                        <a href="{{ route('viajes.edit', $viaje->id) }}" class="btn btn-warning btn-sm" style="
                            padding: 5px 10px;
                            font-size: 0.875rem;
                            font-weight: bold;
                            border: none;
                            background-color: #ffc107;
                            color: white;
                            text-decoration: none;
                            transition: background-color 0.3s ease;">
                            Editar
                        </a>
                        
                        <form class="no-style-form" action="{{ route('viajes.destroy', $viaje->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" style="
                                padding: 5px 10px;
                                font-size: 0.875rem;
                                font-weight: bold;
                                border: none;
                                background-color: #dc3545;
                                color: white;
                                cursor: pointer;
                                transition: background-color 0.3s ease;">
                                Eliminar
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('_partials.foot')

</body>
</html>