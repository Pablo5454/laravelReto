<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('_partials.menu')
    <br>
    <form action="{{route('viajes.store')}}" method="post">
        @csrf
        <label>Origen:</label>
        <input type="text" name="origen"/>
        <label>Destino:</label>
        <input type="text" name="destino"/>

        <div class="d-flex justify-content-center align-items-center">
            <!-- Botón Crear -->
            <input type="submit" value="Crear" style="
                background-color: #4CAF50; 
                color: white;
                padding: 10px 20px; 
                font-size: 1.2rem; 
                font-weight: bold; 
                border: none; 
                border-radius: 8px;
                cursor: pointer;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
                transition: background-color 0.3s, transform 0.2s;
                margin-right: 15px;" 
                onmouseover="this.style.backgroundColor='#45a049'; this.style.transform='scale(1.05)';"
                onmouseout="this.style.backgroundColor='#4CAF50'; this.style.transform='scale(1)';"
            />


            <a href="{{ route('viajes.index') }}" class="btn" style="
                background-color: #ffdd59;
                color: #333;
                font-weight: bold;
                border: none;
                padding: 10px 20px;
                font-size: 1.2rem;
                text-decoration: none;
                transition: background-color 0.3s ease;
                margin-left: 15px;">
                Volver
            </a>
        </div>
    </form>

</body>
</html>