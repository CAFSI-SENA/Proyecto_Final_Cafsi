@extends('layouts.admin.app')
@section('title','Listado Funcionarios')
@section('content')
    <div class="row">
        <div class="col-md-12 mt-3">
            <a href="{{route('funcionario.create')}}" class="btn btn-primary mb-3">Crear Funcionario</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Nombres y Apellidos</th>
                        <th>Tipo</th>
                        <th>Identificación</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Genero</th>
                        <th>Área</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($funcionarios as $funcionario)
                        <tr>
                            <td>{{$funcionario->nombres.' '.$funcionario->apellidos}}</td>
                            @foreach($tiposidentificacion as $tipo)
                                @if($tipo->id == $funcionario->tipo_identificacion_id)
                                    <td>{{$tipo->sigla}}</td>
                                @endif
                            @endforeach
                            <td>{{$funcionario->identificacion}}</td>
                            <td>{{$funcionario->telefono}}</td>
                            <td>{{$funcionario->celular}}</td>
                            @foreach($generos as $genero)
                                @if($funcionario->genero_id == $genero->id)
                                    <td>{{$genero->genero}}</td>
                                @endif
                            @endforeach
                            @foreach($areas as $area)
                                @if($funcionario->area_id == $area->id)
                                    <td>{{$area->area}}</td>
                                @endif
                            @endforeach
                            @foreach($estados as $estado)
                                @if($funcionario->estado_id == $estado->id)
                                    <td>{{$estado->estado}}</td>
                                @endif
                            @endforeach
                            <form action="{{route('funcionario.destroy',$funcionario->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <td>
                                    <div>
                                        <a href="{{route('funcionario.show',$funcionario->id)}}" class="btn btn-info">Detalle</a>
                                        <a href="{{route('funcionario.edit',$funcionario->id)}}" class="btn btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
