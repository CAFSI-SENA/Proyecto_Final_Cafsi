@extends('layouts.admin.app')
@section('title','Listado Activos')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Activos</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Activo</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-14 mb-3">
            <a href="{{route('activo.create')}}" class="btn btn-primary mb-3 mt-3">Crear Activo</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}} mt-2" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>No. Serie</th>
                        <th>Categoria</th>
                        <th>Tipo</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Fecha Adquisición</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($activos as $activo)
                        <tr>
                            <td>{{$activo->numero_serie}}</td>
                            @foreach($categorias as $categoria)
                                @if($activo->categoria_id == $categoria->id)
                                    <td>{{$categoria->categoria}}</td>
                                @endif
                            @endforeach
                            @foreach($tipos as $tipo)
                                @if($activo->tipo_activo_id == $tipo->id)
                                    <td>{{$tipo->tipo}}</td>
                                @endif
                            @endforeach
                            @foreach($marcas as $marca)
                                @if($activo->marca_id == $marca->id)
                                    <td>{{$marca->marca}}</td>
                                @endif
                            @endforeach
                            <td>{{$activo->modelo}}</td>
                            <td>{{$activo->fecha_adquisicion}}</td>
                            @foreach($estados as $estado)
                                @if($activo->estado_id == $estado->id)
                                    <td>{{$estado->estado}}</td>
                                @endif
                            @endforeach
                            <td>
                                <form action="{{route('activo.destroy',$activo->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{route('activo.show',$activo->id)}}" class="btn btn-outline-info"><img
                                            src="/eye.svg"></a>
                                    <a href="{{route('activo.edit',$activo->id)}}" class="btn btn-outline-warning"><img
                                            src="/pencil-square.svg"></a>
                                    <button class="btn btn-outline-danger" type="submit"><img src="/trash.svg"></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
