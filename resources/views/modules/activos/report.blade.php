<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No. Serie</th>
            <th>Categoria</th>
            <th>Tipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Fecha Adquisición</th>
            <th>Estado</th>
        </tr>
        </thead>
        <tbody>
        @foreach($activos as $activo)
            <tr>
                <td>{{$activo->numero_serie}}</td>
                @foreach($categorias as $categoria)
                    @if($activo->categoria_id == $categoria->id)
                        <td>{{$categoria->categoria}}</td>
                    @endif
                @endforeach
                @foreach($tipos as $tipo)
                    @if($activo->tipo_activo_id == $tipo->id)
                        <td>{{$tipo->tipo}}</td>
                    @endif
                @endforeach
                @foreach($marcas as $marca)
                    @if($activo->marca_id == $marca->id)
                        <td>{{$marca->marca}}</td>
                    @endif
                @endforeach
                <td>{{$activo->modelo}}</td>
                <td>{{$activo->fecha_adquisicion}}</td>
                @foreach($estados as $estado)
                    @if($activo->estado_id == $estado->id)
                        <td>{{$estado->estado}}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
