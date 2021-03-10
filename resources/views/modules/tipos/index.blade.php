@extends('layouts.admin.app')
@section('title','Listado Tipos')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tipos Activo</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tipo Activo</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{route('tipo.create')}}" class="btn btn-primary mt-3 mb-3">Crear Tipo Activo</a>
            <div class="table-bordered">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Tipo Activo</th>
                        <th>Estado</th>
                        <th>Fecha Creación</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipos as $tipo)
                        <tr>
                            <td>{{$tipo->tipo}}</td>
                            @foreach($estados as $estado)
                                @if($tipo->estado_id == $estado->id)
                                    <td>{{$estado->estado}}</td>
                                @endif
                            @endforeach
                            <td>{{$tipo->created_at}}</td>
                            <td>
                                <form action="{{route('tipo.destroy',$tipo->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('tipo.show',$tipo->id)}}" class="btn btn-outline-info"><img
                                            src="/eye.svg"></a>
                                    <a href="{{route('tipo.edit',$tipo->id)}}" class="btn btn-outline-warning"><img
                                            src="/pencil-square.svg"></a>
                                    <button class="btn btn-outline-danger"><img src="/trash.svg"></button>
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
