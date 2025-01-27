<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">

@include('_partials.inicio')

<link href="{{ asset('css/boton.css') }}" rel="stylesheet">

@include('_partials.menu')
    <br>
    <a href="{{route('tripulantes.create')}}" class="btn-crear btn ms-3" >Crear nuevo tripulante</a>
<br><br>
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
                        <a href="{{ route('tripulantes.show', $tripulante->id) }}" class="btn-accion btn-accion-info btn-base">
                            Ver
                        </a>
                        
                        <a href="{{ route('tripulantes.edit', $tripulante->id) }}" class="btn-accion btn-accion-warning btn-base">
                            Editar
                        </a>
                        
                        <form class="no-style-form" action="{{ route('tripulantes.destroy', $tripulante->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-accion btn-accion-danger btn-base">
                                Eliminar
                            </button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('_partials.foot')
    @if (session('success'))
    <script>
        Swal.fire({
            title: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Cerrar',
            html: `
                <img src="https://i.pinimg.com/originals/c9/9c/98/c99c98936a66370a09589509ca274001.gif" alt="Cristo GIF" style="width: 50%; max-width: 250px;" alt="Success GIF" width="100%">
            `
        });
    </script>
@endif
</body>
</html>
