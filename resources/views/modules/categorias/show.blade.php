@extends('layouts.admin.app')
@section('title','Detalle Categoría')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Categoría</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Detalle Categoría</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6 offset-3">
            <table class="table">
                <tbody>
                <th>Categoria</th>
                <td>{{$categorias->categoria}}</td>
                </tbody>
                <tbody>
                <th>Estado</th>
                @foreach($estados as $estado)
                    @if($categorias->estado_id == $estado->id)
                        <td>{{$estado->estado}}</td>
                    @endif
                @endforeach
                </tbody>
            </table>
            <a href="{{route('categoria.index')}}" class="btn btn-default mb-3">Volver</a>
            <a href="{{route('categoria.edit',$categorias->id)}}" class="btn btn-warning mb-3">Editar</a>
        </div>
    </div>
@endsection

