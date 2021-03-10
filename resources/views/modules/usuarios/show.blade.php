@extends('layouts.admin.app')
@section('title','Detalle de Usuario')
@section('content')
    <div class="row">
        <div class="table">
            <div class="col-md-3 offset-4">
                <table class="table">
                    <tbody>
                    <th>Nombre</th>
                    <td>{{$usuarios->name}}</td>
                    </tbody>
                    <tbody>
                    <th>Email</th>
                    <td>{{$usuarios->email}}</td>
                    </tbody>
                </table>
                <a href="{{route('usuario.index')}}" class="btn btn-outline-dark">Volver</a>
                <a href="{{route('usuario.edit',$usuarios->id)}}" class="btn btn-outline-warning">Editar</a>
            </div>
        </div>
    </div>
@endsection
