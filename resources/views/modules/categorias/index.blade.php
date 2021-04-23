@extends('layouts.admin.app')
@section('title','Listado Categorías')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Categoría</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Categoría</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <a href="{{route('categoria.create')}}" class="btn btn-primary mb-3">Crear Categoría</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Estado</th>
                        <th>Fecha Creación</th>
                        <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->categoria}}</td>
                            @foreach($estados as $estado)
                                @if($categoria->estado_id == $estado->id)
                                    <td>{{$estado->estado}}</td>
                                @endif
                            @endforeach
                            <td>{{$categoria->created_at}}</td>
                            <td>
                                <form action="{{route('categoria.destroy',$categoria->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('categoria.show',$categoria->id)}}"
                                       class="btn btn-outline-info"><img src="/eye.svg"></a>
                                    <a href="{{route('categoria.edit',$categoria->id)}}"
                                       class="btn btn-outline-warning"><img src="/pencil-square.svg"></a>
                                    <button type="submit" class="btn btn-outline-danger"><img src="/trash.svg"></button>
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

