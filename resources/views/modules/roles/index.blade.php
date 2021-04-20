@extends('layouts.admin.app')
@section('title', 'listado de roles')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <a href="{{route('rol.create')}}" class="btn btn-primary mb-3">Crear Rol</a>
                <thead>
                <tr>
                    <th>ID</th>
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
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->description}}</td>
                        <td>{{$role->guard_name}}</td>
                        <td>{{$role->created_at->diffForHumans()}}</td>
                        <td>
                            <form action="{{route('rol.destroy', $role->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{route('rol.edit',$role->id)}}">Editar</a>
                                <a class="btn btn-primary" href="{{route('rol.show',$role->id)}}">Detalle</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
