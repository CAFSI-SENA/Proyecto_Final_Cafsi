@extends('layouts.admin.app')
@section('title','Detalle Activo')
@section('content')
    <div class="py-12>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 offset-4"">
                            <table class="table">
                                <tbody>
                                <th>No. Serie</th>
                                <td>{{$activos->numero_serie}}</td>
                                </tbody>
                                <tbody>
                                <th>Categoría</th>
                                @foreach($categorias as $categoria)
                                    @if($activos->categoria_id == $categoria->id)
                                        <td>{{$categoria->categoria}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                                <tbody>
                                <th>Tipo</th>
                                @foreach($tipos as $tipo)
                                    @if($activos->tipo_activo_id == $tipo->id)
                                        <td>{{$tipo->tipo}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                                <tbody>
                                <th>Marca</th>
                                @foreach($marcas as $marca)
                                    @if($activos->marca_id == $marca->id)
                                        <td>{{$marca->marca}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                                <tbody>
                                <th>Modelo</th>
                                <td>{{$activos->modelo}}</td>
                                </tbody>
                                <tbody>
                                <th>Fecha Adquisición</th>
                                <td>{{$activos->fecha_adquisicion}}</td>
                                </tbody>
                                <tbody>
                                <th>Estado</th>
                                @foreach($estados as $estado)
                                    @if($activos->estado_id == $estado->id)
                                        <td>{{$estado->estado}}</td>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            <a href="{{route('activo.index')}}" class="btn btn-default mb-3">Volver</a>
                            <a href="{{route('activo.edit',$activos->id)}}" class="btn btn-warning mb-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
