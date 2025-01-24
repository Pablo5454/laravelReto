
    @include('_partials.menu')
    <br>
    <form action="{{route('medicos.update', $medico -> id)}}" method="post">
        @method('PUT')
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{$medico->nombre}}"/>
        <label>Apellido:</label>
        <input type="text" name="apellido" value="{{$medico->apellido}}"/>
        <label>Fecha de incorporación:</label>
        <input type="text" name="fechaIncorporacion" value="{{$medico->fechaIncorporacion}}"/>
        <label>Viaje:</label>
        <input type="text" name="viajeId" value="{{$medico->viajeId}}"/>
        <input type="submit" value="Editar"/>

    </form>
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('medicos.index')}}" class="btn" style="
            background-color: #ffdd59;
            color: #333;
            font-weight: bold;
            border: none;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            transition: background-color 0.3s ease;">Volver</a>
    </div>
</body>
</html>