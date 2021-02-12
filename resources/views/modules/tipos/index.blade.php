@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
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
                                        <a href="{{route('tipo.show',$tipo->id)}}" class="btn btn-info">Detalle</a>
                                        <a href="{{route('tipo.edit',$tipo->id)}}" class="btn btn-warning">Editar</a>
                                        <button class="btn btn-danger">Eliminar</button>
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
