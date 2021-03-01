@extends('layouts.admin.app')
@section('title','Editar Activo')
@section('content')
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-4">
                            <form action="{{route('activo.update',$activos->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <table class="table">
                                    <tbody>
                                    <th>Nombre Activo</th>
                                    <td><input type="text" class="form-control" value="{{$activos->nombre_activo}}"></td>
                                    </tbody>
                                    <tbody>
                                    <th>No. Serie</th>
                                    <td><input type="text" class="form-control" value="{{$activos->numero_serie}}"></td>
                                    </tbody>
                                    <tbody>
                                    <th>Categoría</th>
                                    <td>
                                        <select name="categoria_id" id="categoria_id" class="form-select">
                                            @foreach($categorias as $categoria)
                                                <option value="{{$categoria->id}}"
                                                        @if($activos->categoria_id == $categoria->id)
                                                        selected
                                                    @endif
                                                >{{$categoria->categoria}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    </tbody>
                                    <tbody>
                                    <th>Tipo</th>
                                    <td>
                                        <select name="tipo_activo_id" id="tipo_activo_id" class="form-select">
                                            @foreach($tipos as $tipo)
                                                <option value="{{$tipo->id}}"
                                                    @if($activos->tipo_activo_id == $tipo->id)
                                                        selected
                                                    @endif
                                                >{{$tipo->tipo}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    </tbody>
                                    <tbody>
                                    <th>Marca</th>
                                    <td>
                                        <select name="marca_id" id="marca_id" class="form-select">
                                            @foreach($marcas as $marca)
                                                <option value="{{$marca->id}}"
                                                    @if($activos->marca_id == $marca->id)
                                                        selected
                                                    @endif
                                                >{{$marca->marca}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    </tbody>
                                    <tbody>
                                    <th>Modelo</th>
                                    <td><input type="text" class="form-control" value="{{$activos->modelo}}"></td>
                                    </tbody>
                                    <tbody>
                                    <th>Fecha Adquisición</th>
                                    <td><input type="text" class="form-control" value="{{$activos->fecha_adquisicion}}"></td>
                                    </tbody>
                                    <tbody>
                                    <th>Estado</th>
                                    <td>
                                        <select name="estado_id" id="estado_id" class="form-select">
                                            @foreach($estados as $estado)
                                                <option value="{{$estado->id}}"
                                                    @if($activos->estados_id == $estado->id)
                                                        selected
                                                    @endif
                                                >{{$estado->estado}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    </tbody>
                                </table>
                                <a href="{{route('activo.index')}}" class="btn btn-default mb-3">Cancelar</a>
                                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
@endsection

