@extends('layouts.admin.app')
@section('title','Detalle Funcionario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <table class="table">
                    <tbody>
                    <th>Nombres</th>
                    <td>{{$funcionarios->nombres}}</td>
                    </tbody>
                    <tbody>
                    <th>Apellidos</th>
                    <td>{{$funcionarios->apellidos}}</td>
                    </tbody>
                    <tbody>
                    <th>Tipo Identificación</th>
                    @foreach($tiposidentificacion as $tipo)
                        @if($funcionarios->tipo_identificacion_id == $tipo->id)
                            <td>{{$tipo->tipo}}</td>
                        @endif
                    @endforeach
                    </tbody>
                    <tbody>
                    <th>Identificación</th>
                    <td>{{$funcionarios->identificacion}}</td>
                    </tbody>
                    <tbody>
                    <th>Telefono</th>
                    <td>{{$funcionarios->telefono}}</td>
                    </tbody>
                    <tbody>
                    <th>Celular</th>
                    <td>{{$funcionarios->celular}}</td>
                    </tbody>
                    <tbody>
                    <th>Genero</th>
                    @foreach($generos as $genero)
                        @if($funcionarios->genero_id == $genero->id)
                            <td>{{$genero->genero}}</td>
                        @endif
                    @endforeach
                    </tbody>
                    <tbody>
                    <th>Área</th>
                    @foreach($areas as $area)
                        @if($funcionarios->area_id == $area->id)
                            <td>{{$area->area}}</td>
                        @endif
                    @endforeach
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    @foreach($estados as $estado)
                        @if($funcionarios->estado_id == $estado->id)
                            <td>{{$estado->estado}}</td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('funcionario.index')}}" class="btn btn-default mb-3">Volver</a>
                <a href="{{route('funcionario.edit',$funcionarios->id)}}" class="btn btn-warning mb-3">Editar</a>
            </div>
        </div>
    </div>
@endsection
