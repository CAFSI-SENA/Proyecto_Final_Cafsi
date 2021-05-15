@extends('layouts.admin.app')
@section('title', 'listado de roles')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <a href="{{route('rol.create')}}" class="btn btn-primary mb-3">Crear Rol</a>
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Ruta</th>
                    <th>Creación</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($rows as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>{{$role->guard_name}}</td>
                        <td>{{$role->created_at->diffForHumans()}}</td>
                        <td>
                            <form action="{{route('rol.destroy', $role->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-outline-primary" href="{{route('rol.edit',$role->id)}}"><img src="/pencil-square.svg"
                                                                                                               alt=""></a>
                                <a class="btn btn-outline-warning" href="{{route('rol.show',$role->id)}}"><img src="/eye.svg"
                                                                                                               alt=""></a>
                                <button type="submit" class="btn btn-outline-danger"><img src="/trash.svg" alt=""></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
