@extends('layouts.admin.app')
@section('title','Detalle de usuario')
@section('content')
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$row->name}}</p>

            <h2 class="h5">Listado de roles</h2>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($roles as $role)
                            <div class="col-12">
                                <label>
                                    {!! Form::checkbox("roles[{$role->id}]",
                                        $role->id,
                                        $row->hasRole($role->id),
                                        [
                                            //'label' => $role->description,
                                            'disabled' => 'disabled',
                                        ]

                                        ) !!}
                                    {{$role->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <h2 class="h5 mt-3">Listado de permisos</h2>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        @foreach($permissions as $permission)
                            <div class="col-12">
                                <label>
                                    {!! Form::checkbox("roles[{$permission->id}]",
                                        $permission->id,
                                        $row->hasPermissionTo($permission->id),
                                        [
                                            //'label' => $role->description
                                            'disabled'
                                        ]
                                        ) !!}
                                    {{$permission->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="{{route('user.index')}}" class="btn btn-outline-info mt-2">Cancelar</a>
            <a href="{{route('user.edit', $row->id)}}" class="btn btn-outline-primary mt-2">Editar</a>
        </div>
    </div>
@endsection
