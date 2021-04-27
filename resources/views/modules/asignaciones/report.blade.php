<div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
        <th>Serie</th>
        <th>Tipo Activo</th>
        <th>Funcionario Prestamo</th>
        <th>Tipo Prestamo</th>
        <th>Fecha Inicio</th>
        <th>Fecha Entrega</th>
        </tbody>
        <tbody>
        @foreach($asignaciones as $asignacion)
            <tr>
                <td>{{$asignacion->numero_serie}}</td>
                <td>{{$asignacion->tipo}}</td>
                <td>{{$asignacion->nombres.' '.$asignacion->apellidos}}</td>
                <td>{{$asignacion->tipo_asignacion}}</td>
                <td>{{$asignacion->fecha_inicio}}</td>
                <td>{{$asignacion->fecha_fin}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
