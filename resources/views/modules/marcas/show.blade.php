@extends('layouts.admin.app')
@section('title','Detalle Marca')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Marcas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detalle Marca</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
            @if(session('message'))
                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <table class="table">
                <tbody>
                <th>Marca</th>
                <td>{{$marcas->marca}}</td>
                </tbody>
                <tbody>
                <th>Estado</th>
                @foreach($estados as $estado)
                    @if($marcas->estado_id == $estado->id)
                        <td>{{$estado->estado}}</td>
                    @endif
                @endforeach
                </tbody>
            </table>
            <a href="{{route('marca.index')}}" class="btn btn-default mb-3">Volver</a>
            <a href="{{route('marca.edit',$marcas->id)}}" class="btn btn-warning mb-3">Editar</a>
        </div>
    </div>
@endsection
