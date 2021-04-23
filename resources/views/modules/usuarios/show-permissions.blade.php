@extends('layouts.admin.app')
@section('title','Detalle de Usuario')
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$row->name}}</p>

            <h2 class="h5">Listado de Permisos</h2>
            {!! Form::open (['route' => ['user.permission', $row->id], 'method' => 'patch']) !!}
            <div class="row">
                @foreach($permissions as $permission)
                    <div class="col-12">
                        <label>
                            {!! Form::checkbox(
                                "permissions[{$permission->id}]",
                                $permission->id,
                                $row->hasPermissionTo($permission->id),
                                //['label' => $role->description]
                                ) !!}
                            {{$permission->name}}
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-outline-primary mt-2">Asignar Permiso</button>
            <a href="{{route('user.index')}}" class="btn btn-outline-info mt-2">Cancelar</a>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
