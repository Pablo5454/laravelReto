
    @include('_partials.menu')
    <br>
    <form action="{{route('medicos.store')}}" method="post">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre"/>
        <label>Apellido:</label>
        <input type="text" name="apellido"/>
        <label>Fecha de incorporación:</label>
        <input type="text" name="fechaIncorporacion"/>
        <label>Viaje:</label>
        <input type="text" name="viajeId"/>
        <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">

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
        
            <a href="{{ route('medicos.index') }}" class="btn" style="
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