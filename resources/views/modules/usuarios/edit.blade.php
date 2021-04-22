@extends('layouts.admin.app')
@section('title','Editar Usuario')
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$row->name}}</p>

            <h2 class="h5">Listado de roles</h2>
            {!! Form::open (['route' => ['user.role', $row->id], 'method' => 'patch']) !!}
            <div class="row">
                @foreach($roles as $role)
                    <div class="col-12">
                        <label>
                            {!! Form::checkbox("roles[{$role->id}]",
                                $role->id,
                                $row->hasRole($role->id),
                                //['label' => $role->description]
                                ) !!}
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
            </div>

            {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
            <a href="{{route('user.index')}}" class="btn btn-outline-info mt-2">Cancelar</a>
            <a href="{{route('user.permissionshow', $row->id)}}" class="btn btn-outline-info mt-2">Permisos</a>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
