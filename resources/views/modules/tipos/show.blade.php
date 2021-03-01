@extends('layouts.admin.app')
@section('title','Detalle Tipo')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                @if(session('message'))
                    <div class="alert alert-{{session('type')}} mt-2" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <table class="table">
                    <tbody>
                    <th>Tipo Activo</th>
                    <td>{{$tipos->tipo}}</td>
                    </tbody>
                    <tbody>
                    <th>Estado</th>
                    @foreach($estados as $estado)
                        @if($tipos->estado_id == $estado->id)
                            <td>{{$estado->estado}}</td>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Volver</a>
                <a href="{{route('tipo.edit',$tipos->id)}}" class="btn btn-warning mb-3">Editar</a>
            </div>
        </div>
    </div>
@endsection
