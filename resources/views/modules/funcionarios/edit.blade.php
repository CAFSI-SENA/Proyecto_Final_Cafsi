@extends('layouts.admin.app')
@section('title','Editar Funcionario')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Funcionarios</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Actualizar Funcionario</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-5 offset-3">
            <form action="{{route('funcionario.update',$funcionarios->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tbody>
                    <th>Nombres</th>
                    <td><input type="text" class="form-control" value="{{$funcionarios->nombres}}"
                               style="text-transform:uppercase"
                               onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombres" maxlength="30">
                    </td>
                    </tbody>
                    <tbody>
                    <th>Apellidos</th>
                    <td><input type="text" class="form-control" value="{{$funcionarios->apellidos}}"
                               style="text-transform:uppercase"
                               onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidos"
                               maxlength="30"></td>
                    </tbody>
                    <tbody>
                    <th>Tipo Identificación</th>
                    <td>
                        <select name="tipo_identificacion_id" id="tipo_identificacion_id" class="form-select">
                            @foreach($tiposidentificacion as $tipo)
                                <option value="{{$tipo->id}}"
                                        @if($funcionarios->tipo_identificacion_id == $tipo->id)
                                        selected
                                    @endif
                                >{{$tipo->tipo}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tbody>
                    <tbody>
                    <th>Identificación</th>
                    <td><input type="text" class="form-control" value="{{$funcionarios->identificacion}}"></td>
                    </tbody>
                    <tbody>
                    <th>Telefono</th>
                    <td><input type="text" class="form-control" value="{{$funcionarios->telefono}}"></td>
                    </tbody>
                    <tbody>
                    <th>Celular</th>
                    <td><input type="text" class="form-control" value="{{$funcionarios->celular}}"></td>
                    </tbody>
                    <tbody>
                    <th>Genero</th>
                    <td>
                        <select name="genero_id" id="genero_id" class="form-select">
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}"
                                        @if($funcionarios->genero_id == $genero->id)
                                        selected
                                    @endif
                                >{{$genero->genero}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tbody>
                    <tbody>
                    <th>Área</th>
                    <td>
                        <select name="area_id" id="area_id" class="form-select">
                            @foreach($areas as $area)
                                <option value="{{$area->id}}"
                                        @if($funcionarios->area_id == $area->id)
                                        selected
                                    @endif
                                >{{$area->area}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    <td>
                        <select name="estado_id" id="estado_id" class="form-select">
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}"
                                        @if($funcionarios->estado_id == $estado->id)
                                        selected
                                    @endif
                                >{{$estado->estado}}</option>
                            @endforeach
                        </select>
                    </td>
                    </tbody>
                </table>
                <a href="{{route('funcionario.index')}}" class="btn btn-default mb-3">Cancelar</a>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection
