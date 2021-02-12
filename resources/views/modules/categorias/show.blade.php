@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
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
    </div>
@endsection

