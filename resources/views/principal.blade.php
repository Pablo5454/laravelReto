    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">

    @include('_partials.inicio')

    @include('_partials.menu')

    @if (session('success'))
        <script>
            Swal.fire({
                title: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Cerrar',
                html: `
                    <img src="https://i.pinimg.com/originals/c9/9c/98/c99c98936a66370a09589509ca274001.gif" alt="Cristo GIF" style="width: 50%; max-width: 250px;" width="100%">
                `
            });
        </script>
    @endif
</body>
</html>