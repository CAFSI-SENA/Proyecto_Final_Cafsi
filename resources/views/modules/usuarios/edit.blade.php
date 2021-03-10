@extends('layouts.admin.app')
@section('title','Actualizar Usuario')
@section('content')
    <div class="row">
        <div class="col-md-3 offset-4">
            <form action="{{route('usuario.update',$usuarios->id)}}" method="post">
                @csrf
                @method('PUT')
                <table class="table">
                    <tbody>
                    <th>Nombre</th>
                    <td><input type="text" class="form-control" value="{{$usuarios->name}}" name="name"></td>
                    </tbody>
                    <tbody>
                    <th>Email</th>
                    <td><input type="text" class="form-control" value="{{$usuarios->email}}" name="email"></td>
                    </tbody>
                </table>
                <a href="{{route('usuario.index')}}" class="btn btn-outline-dark">Cancelar</a>
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection
