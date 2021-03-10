@extends('layouts.admin.app')
@section('title','Relacion de Usuarios')
@section('content')
    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <div class="col-md-12">
                    <a href="{{route('usuario.create')}}" class="btn btn-primary mb-3">Crear Usuario</a>
                    <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Fecha Creación</th>
                            <th>Fecha Actualización</th>
                            <th>Opciones</th>
                        </tr>
                    </tbody>
                        <tbody>
                        @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->created_at}}</td>
                            <td>{{$usuario->updated_at}}</td>
                            <td>
                                <form action="{{route('usuario.destroy',$usuario->id)}}">
                                    <a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-outline-info"><img src="/eye.svg" alt=""></a>
                                    <a href="{{route('usuario.edit',$usuario->id)}}" class="btn btn-outline-warning"><img src="/pencil-square.svg" alt=""></a>
                                    <button type="submit" class="btn btn-outline-danger"><img src="/trash.svg" alt=""></button>
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
