@extends('layouts.admin.app')
@section('title','Listado Asignaciones')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('asignacion.create')}}" class="btn btn-primary">Crear Asignación</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tbody>
                        <th>Serie</th>
                        <th>Tipo Activo</th>
                        <th>Funcionario Prestamo</th>
                        <th>Tipo Prestamo</th>
                        <th>Fecha Inicio</th>
                        <th>Fecha Entrega</th>
                        <th>Opciones</th>
                        </tbody>
                        <tbody>
                        @foreach($asignaciones as $asignacion)
                            <td>{{$asignacion->activo_id}}</td>
                            <td>{{$asignacion->activo_id}}</td>
                            <td>{{$asignacion->funcionario_id}}</td>
                            <td>{{$asignacion->tipo_asignacion}}</td>
                            <td>{{$asignacion->fecha_inicio}}</td>
                            <td>{{$asignacion->fecha_fin}}</td>
                            <td>
                                <a href="" class="btn btn-outline-info"><img src="" alt=""></a>
                                <a href="" class="btn btn-outline-warning"><img src="" alt=""></a>
                                <button type="submit" class="btn btn-outline-danger"><img src="" alt=""></button>
                            </td>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
