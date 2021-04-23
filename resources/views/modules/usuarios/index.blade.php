@extends('layouts.admin.app')
@section('title','Listado de Usuarios')
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('user.create')}}" class="btn btn-primary">Crear Usuario</a>
            <input wire:model="search" name="search" class="form-control" placeholder="Ingrese el correo o nombre de usuario">
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
                                $can_view_permissions = auth()->user()->can('admin-users-edit');
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
