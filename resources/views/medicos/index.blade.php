{{-- @extends('layouts.app')

@section('title', 'Lista de Médicos')

@section('content')
<h1>Lista de Médicos</h1>
<a href="{{ route('medicos.create') }}" class="btn btn-primary mb-3">Añadir Médico</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de Incorporación</th>
            <th>Viaje Asociado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($medicos as $medico)
            <tr>
                <td>{{ $medico->id }}</td>
                <td>{{ $medico->nombre }}</td>
                <td>{{ $medico->apellido }}</td>
                <td>{{ $medico->fecha_incorporacion }}</td>
                <td>{{ $medico->viaje_id }}</td>
                <td>
                    <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('medicos.create')}}">Crear nuevo médico</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                {{-- <th>Fecha de Incorporación</th>
                <th>Viaje Asociado</th> --}}
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->id }}</td>
                    <td>{{ $medico->nombre }}</td>
                    <td>{{ $medico->apellido }}</td>
                    {{-- <td>{{ $medico->fecha_incorporacion }}</td>
                    <td>{{ $medico->viaje_id }}</td> --}}
                    <td>
                        <a href="{{ route('medicos.show', $medico->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('medicos.edit', $medico->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>