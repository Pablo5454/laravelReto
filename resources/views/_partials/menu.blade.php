


    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #4e54c8, #8f94fb); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand ms-0" href="#" id="luzMarinaLink" style="font-size: 1.8rem; font-weight: 700; color: #fff; text-transform: uppercase; font-family: 'Merriweather', serif;">Luz Marina</a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse">
                <!-- Menú centrado -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a href="{{ route('medicos.index') }}" class="nav-link">Médicos</a></li>
                    <li class="nav-item"><a href="{{ route('tripulantes.index') }}" class="nav-link">Tripulantes</a></li>
                    <li class="nav-item"><a href="{{ route('viajes.index') }}" class="nav-link">Viajes</a></li>
                    <li class="nav-item"><a href="{{ route('rescates.index') }}" class="nav-link">Rescates</a></li>
                    <li class="nav-item"><a href="{{ route('rescatados.index') }}" class="nav-link">Rescatados</a></li>
                </ul>
    
                <div class="ms-auto">
                    <form class="no-style-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-light btn-logout">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    
