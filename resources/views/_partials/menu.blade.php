<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luz Marina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/formulario.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background: linear-gradient(90deg, #4e54c8, #8f94fb); box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <div class="container">
            <a class="navbar-brand ms-0" href="#" id="luzMarinaLink" style="font-size: 1.8rem; font-weight: 700; color: #fff; text-transform: uppercase; font-family: 'Merriweather', serif;">Luz Marina</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('medicos.index') }}" class="nav-link" style="font-size: 1.2rem; font-family: 'Merriweather', serif;">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tripulantes.index') }}" class="nav-link" style="font-size: 1.2rem; font-family: 'Merriweather', serif;">Tripulantes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('viajes.index') }}" class="nav-link" style="font-size: 1.2rem; font-family: 'Merriweather', serif;">Viajes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rescates.index') }}" class="nav-link" style="font-size: 1.2rem; font-family: 'Merriweather', serif;">Rescates</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rescatados.index') }}" class="nav-link" style="font-size: 1.2rem; font-family: 'Merriweather', serif;">Rescatados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>