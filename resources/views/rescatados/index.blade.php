@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <a href="{{route('rescatados.create')}}" class="btn-crear btn ms-3">Crear nuevo rescatado</a>
<br><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rescatados as $rescatado)
                <tr>
                    <td>{{ $rescatado->id }}</td>
                    <td>{{ $rescatado->nombre }}</td>
                    
                    <td>
                        <a href="{{ route('rescatados.show', $rescatado->id) }}" class="btn-accion btn-accion-info btn-base" >
                            Ver
                        </a>
                        
                        <a href="{{ route('rescatados.edit', $rescatado->id) }}" class="btn-accion btn-accion-warning btn-base" >
                            Editar
                        </a>
                        
                        <form class="no-style-form" action="{{ route('rescatados.destroy', $rescatado->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-accion btn-accion-danger btn-base" >
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

@section('title', 'Lista de Rescatados')

@section('content')
<h1>Lista de Rescatados</h1>
<a href="{{ route('rescatados.create') }}" class="btn btn-primary mb-3">Añadir Rescatado</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rescatados as $rescatado)
            <tr>
                <td>{{ $rescatado->nombre }}</td>
                <td>{{ $rescatado->edad }}</td>
                <td>
                    <a href="{{ route('rescatados.show', $rescatado->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('rescatados.edit', $rescatado->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('rescatados.destroy', $rescatado->id) }}" method="POST" style="display:inline;">
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
