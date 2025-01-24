
    @include('_partials.menu')
    <br>
    <a href="{{route('medicos.create')}}" class="btn ms-3" style="
    background-color: #ffdd59;
    color: #333;
    font-weight: bold;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    text-decoration: none;
    transition: background-color 0.3s ease;">Crear nuevo rescate</a>
    <br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rescates as $rescate)
            <tr>
                <td>{{ $rescate->id }}</td>
                <td>{{ $rescate->fechaInicio }}</td>
                <td>{{ $rescate->fechaFin }}</td>
                <td>
                    <a href="{{ route('rescates.show', $rescate->id) }}" class="btn btn-info btn-sm" style="
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
                    
                    <a href="{{ route('rescates.edit', $rescate->id) }}" class="btn btn-warning btn-sm" style="
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
                    
                    <form class="no-style-form"  action="{{ route('rescates.destroy', $rescate->id) }}" method="POST" style="display:inline;">
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
{{-- @extends('layouts.app')

@section('title', 'Lista de Rescates')

@section('content')
<h1>Lista de Rescates</h1>
<a href="{{ route('rescates.create') }}" class="btn btn-primary mb-3">Añadir Rescate</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Lugar</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rescates as $rescate)
            <tr>
                <td>{{ $rescate->fecha }}</td>
                <td>{{ $rescate->lugar }}</td>
                <td>
                    <a href="{{ route('rescates.show', $rescate->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('rescates.edit', $rescate->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('rescates.destroy', $rescate->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection --}}