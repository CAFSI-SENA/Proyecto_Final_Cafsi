@extends('layouts.admin.app')
@section('title','Detalle Bajas')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Bajas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"> Detalle Baja</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6 offset-4">
            <table class="table">
                <tbody>
                <th>Fecha Baja</th>
                <td>{{$bajas->fecha_baja}}</td>
                </tbody>
                <tbody>
                <th>Tipo de Baja</th>
                @foreach($tipos_baja as $tipo)
                    @if($bajas->tipo_baja_id == $tipo->id)
                        <td>{{$tipo->tipo}}</td>
                    @endif
                @endforeach
                </tbody>
                <tbody>
                <th>Serie Activo</th>
                @foreach($activos as $activo)
                    @if($bajas->activo_id == $activo->id)
                        <td>{{$activo->numero_serie}}</td>
                    @endif
                @endforeach
                </tbody>
                <tbody>
                <th>Observación</th>
                <td>{{$bajas->observacion}}</td>
                </tbody>
            </table>
            <a class="btn btn-outline-dark" href="{{route('baja.index')}}">Volver</a>
            <a class="btn btn-outline-warning" href="{{route('baja.edit',$bajas->id)}}">Editar</a>
        </div>
    </div>
@endsection
