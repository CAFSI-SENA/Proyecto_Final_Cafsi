@extends('layouts.admin.app')
@section('title', 'Listado de usuarios')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <a href="{{route('user.create')}}" class="btn btn-outline-primary mb-3">Crear Usuario</a>
                    <input wire:model="search" name="search" class="form-control" placeholder="Ingrese el correo o nombre de usuario">
                </div>

            </div>

        </div>
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Creación</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{route('user.edit',$user->id)}}"><img src="/pencil-square.svg"></a>
                            <a class="btn btn-outline-warning" href="{{route('user.show',$user->id)}}"><img src="/eye.svg"></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $('#usuarios').DataTable();
    </script>
@endsection
