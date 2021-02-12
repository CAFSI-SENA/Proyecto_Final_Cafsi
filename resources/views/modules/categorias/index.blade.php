@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
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
                                        <a href="{{route('categoria.show',$categoria->id)}}" class="btn btn-info">Detalle</a>
                                        <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

