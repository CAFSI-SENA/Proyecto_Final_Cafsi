@extends('layouts.admin.app')
@section('title','Detalle Activo')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Activos</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detalle Activo</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
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
@endsection
