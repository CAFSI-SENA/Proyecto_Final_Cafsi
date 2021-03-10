@extends('layouts.admin.app')
@section('title','Relacion de Usuarios')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Usuarios</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Usuario</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
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
                                <form action="{{route('usuario.destroy',$usuario->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('usuario.show',$usuario->id)}}" class="btn btn-outline-info"><img
                                            src="/eye.svg" alt=""></a>
                                    <a href="{{route('usuario.edit',$usuario->id)}}"
                                       class="btn btn-outline-warning"><img src="/pencil-square.svg" alt=""></a>
                                    <button type="submit" class="btn btn-outline-danger"><img src="/trash.svg" alt="">
                                    </button>
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
