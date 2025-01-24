<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Título en el tercio izquierdo -->
            <a class="navbar-brand ms-0" href="#" id="luzMarinaLink">Luz Marina</a>

            <!-- Opciones en el tercio central -->
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{ route('medicos.index') }}" class="nav-link">Médicos</a></li>
                <li class="nav-item"><a href="{{ route('tripulantes.index') }}" class="nav-link">Tripulantes</a></li>
                <li class="nav-item"><a href="{{ route('viajes.index') }}" class="nav-link">Viajes</a></li>
                <li class="nav-item"><a href="{{ route('rescates.index') }}" class="nav-link">Rescates</a></li>
                <li class="nav-item"><a href="{{ route('rescatados.index') }}" class="nav-link">Rescatados</a></li>
            </ul>

            <!-- Botón Log Out en el tercio derecho -->
            <div class="ms-auto">
                <form class="no-style-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-light btn-logout">Log Out</button>
                </form>
            </div>
        </div>
    </nav>