@extends('layouts.admin.app')
@section('title','Detalle Área')
@section('content')
        <div class="row">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Áreas</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Detalle Área</a></li>
                        <li class="breadcrumb-item active">Administrador</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-6 offset-3">

                @if(session('message'))
                    <div class="alert alert-{{session('type')}} mt-2" role="alert">
                        {{session('message')}}
                    </div>
                @endif

                <table class="table">
                    <tbody>
                    <th>Área</th>
                    <td>{{$areas->area}}</td>
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    @foreach($estados as $estado)
                        @if($estado->id == $areas->estado_id)
                            <td>{{$estado->estado}}</td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('area.index')}}" class="btn btn-default mb-2">Volver</a>
                <a href="{{route('area.edit',$areas->id)}}" class="btn btn-warning mb-2">Editar</a>
            </div>
        </div>
@endsection


