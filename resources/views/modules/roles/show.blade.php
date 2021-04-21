@extends('layouts.admin.app')
@section('title', 'Detalle de rol')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <table class="table">
                <div class="mt-3">
                    <a href="{{route('rol.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <a href="{{route('rol.edit', $row->id)}}" class="btn btn-primary mb-3">Editar</a>
                </div>
                <tbody>
                <th>Nombre</th>
                <td>{{$row->name}}</td>
                </tbody>
                <tbody>
                <th>Descripción</th>
                <td>{{$row->description}}</td>
                </tbody>
            </table>
            <div class="card">
                <div class="card-body">
                    Permisos asignados
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $can_view_permissions = auth()->user()->can('admin-permission-show');
                        @endphp


                        @foreach($row->permissions as $permission)
                            <tr>
                                <td>
                                    @if($can_view_permissions)
                                        <a href="{{ route('permission.show',$row->id) }}">{{$permission->name}}</a>
                                    @else
                                        {{ $permission->name }}
                                    @endif
                                </td>
                                <td>{{$permission->description}}</td>
                            </tr>
                        @endforeach

                        <!--    @can('admin-permission-show')
                            @foreach($row->permissions as $permission)
                                <tr>
                                    <td><a href="{{ route('permission.show',$row->id) }}">{{$permission->name}}</a></td>
                                                <td>{{$permission->description}}</td>
                                            </tr>
                                        @endforeach
                        @else
                            @foreach($row->permissions as $permission)
                                <tr>
                                    <td></td>
                                    <td>{{$permission->name}}</td>
                                                <td>{{$permission->description}}</td>
                                            </tr>
                                        @endforeach
                        @endcan -->

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mt-2 mb-2">
                <div class="card-body">
                    Usuarios Asignados
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>email</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($row->users as $user)
                            <tr>
                                <td><a href="{{ route('user.show',$row->id) }}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
