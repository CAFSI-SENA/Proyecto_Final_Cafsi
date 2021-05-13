@extends('layouts.admin.app')
@section('title','Listado de Usuarios')
@section('content')
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0 font-size-18">Usuarios</h4>

     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Usuario</a></li>
            <li class="breadcrumb-item active">Administrador</li>
        </ol>
     </div>
</div>
    <div class="row">
        <div class="col">
            <a href="{{route('user.create')}}" class="btn btn-primary">Crear Usuario</a>
        </div>
        <div class="col-2">
            <input type="text" class="form-control float-end" placeholder="Nombre">
        </div>
        <div class="col">
            <button class="btn btn-outline-secondary" type="submit"><img src="/search.svg" alt=""></button>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Creación</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            @php
                                $can_view_permissions = auth()->user()->can('admin-usuarios-edit');
                            @endphp

                            @if($can_view_permissions)
                                <a class="btn btn-outline-primary" href="{{route('user.edit',$user->id)}}"><img src="/pencil-square.svg"
                                                                                                                alt=""></a>
                            @endif
                            <a class="btn btn-outline-warning" href="{{route('user.show',$user->id)}}"><img src="/eye.svg"
                                                                                                            alt=""></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
