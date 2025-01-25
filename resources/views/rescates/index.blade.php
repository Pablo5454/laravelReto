@include('_partials.inicio')
<link href="{{ asset('css/formulario.css') }}" rel="stylesheet">
    @include('_partials.menu')
    <br>
    <a href="{{route('rescates.create')}}" class="btn-crear btn ms-3">Crear nuevo rescate</a>
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
                <td>{{ $rescate->fecha_inicio }}</td>
                <td>{{ $rescate->fecha_fin }}</td>
                <td>
                    <a href="{{ route('rescates.show', $rescate->id) }}" class="btn-accion btn-accion-info btn-base" >
                        Ver
                    </a>
                    
                    <a href="{{ route('rescates.edit', $rescate->id) }}" class="btn-accion btn-accion-warning btn-base">
                        Editar
                    </a>
                    
                    <form class="no-style-form"  action="{{ route('rescates.destroy', $rescate->id) }}" method="POST" style="display:inline;">
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
