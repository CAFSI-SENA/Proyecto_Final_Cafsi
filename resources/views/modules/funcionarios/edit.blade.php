@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-3">
                <form action="{{route('funcionario.update',$funcionarios->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table">
                        <tbody>
                        <th>Nombres</th>
                        <td><input type="text" class="form-control" value="{{$funcionarios->nombres}}"></td>
                        </tbody>
                        <tbody>
                        <th>Apellidos</th>
                        <td><input type="text" class="form-control" value="{{$funcionarios->apellidos}}"></td>
                        </tbody>
                        <tbody>
                        <th>Tipo Identificación</th>
                        <td>
                            <select name="" id="" class="form-select">
                                @foreach($tiposidentificacion as $tipo)
                                    <option value="{{$funcionarios->tipo_identificacion_id}}"
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
                                    <option value="{{$funcionarios->genero_id}}"
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
                                    <option value="{{$funcionarios->area_id}}"
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
                                    <option value="{{$funcionarios->estado_id}}"
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
    </div>
@endsection
