
    @include('_partials.menu')
    <br>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Origen</th>
                <th>Destino</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $viaje->id }}</td>
                    <td>{{ $viaje->origen }}</td>
                    <td>{{ $viaje->destino }}</td>
            
                </tr>
        </tbody>
    </table>

    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <a href="{{route('viajes.index')}}" class="btn" style="
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