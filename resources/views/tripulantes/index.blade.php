<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('tripulantes.create')}}">Crear nuevo tripulante</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tripulantes as $tripulante)
                <tr>
                    <td>{{ $tripulante->id }}</td>
                    <td>{{ $tripulante->nombre }}</td>
                    <td>{{ $tripulante->apellido }}</td>
                    <td>
                        <a href="{{ route('tripulantes.show', $tripulante->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('tripulantes.edit', $tripulante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('tripulantes.destroy', $tripulante->id) }}" method="POST" style="display:inline;">
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

{{-- @extends('layouts.app')

@section('title', 'Lista de Tripulantes')

@section('content')
<h1>Lista de Tripulantes</h1>
<a href="{{ route('tripulantes.create') }}" class="btn btn-primary mb-3">Añadir Tripulante</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Rol</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tripulantes as $tripulante)
            <tr>
                <td>{{ $tripulante->nombre }}</td>
                <td>{{ $tripulante->rol }}</td>
                <td>
                    <a href="{{ route('tripulantes.show', $tripulante->id) }}" class="btn btn-info btn-sm">Ver</a>
                    <a href="{{ route('tripulantes.edit', $tripulante->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('tripulantes.destroy', $tripulante->id) }}" method="POST" style="display:inline;">
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