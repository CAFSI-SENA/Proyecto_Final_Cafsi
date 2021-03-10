@extends('layouts.admin.app')
@section('title','Listado Marcas')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Marcas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Marca</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <a href="{{route('marca.create')}}" class="btn btn-primary">Crear Marca</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <table-responsive>
                <table class="table table-bordered mt-3">
                    <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Estado</th>
                        <th>Fecha Creación</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marcas as $marca)
                        <tr>
                            <td>{{$marca->marca}}</td>
                            @foreach($estados as $estado)
                                @if($marca->estado_id == $estado->id)
                                    <td>{{$estado->estado}}</td>
                                @endif
                            @endforeach
                            <td>{{$marca->created_at}}</td>
                            <td>
                                <form action="{{route('marca.destroy',$marca->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('marca.show',$marca->id)}}" class="btn btn-outline-info"><img
                                            src="/eye.svg"></a>
                                    <a href="{{route('marca.edit',$marca->id)}}" class="btn btn-outline-warning"><img
                                            src="/pencil-square.svg"></a>
                                    <button class="btn btn-outline-danger"><img src="/trash.svg"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </table-responsive>
        </div>
    </div>
@endsection


