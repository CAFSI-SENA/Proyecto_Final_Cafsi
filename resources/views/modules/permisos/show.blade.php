@extends('layouts.admin.app')
@section('title','Listado Permisos')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">

            <table class="table">
                <div class="mt-3">
                    <a href="{{route('permission.index')}}" class="btn btn-default mb-3">Cancelar</a>
                </div>
                <thead>
                <th>Nombre</th>
                <th>Descripción</th>
                </thead>
                <tbody>
                <td>{{$row->name}}</td>
                <td>{{$row->description}}</td>
                </tbody>
            </table>

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
                        @foreach($row->users as $use)
                            <tr>
                                <td><a href="{{ route('user.show',$row->id) }}">{{$use->name}}</a></td>
                                <td>{{$use->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    Roles asignados
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $can_view_roles = auth()->user()->can('admin-role-show');
                        @endphp

                        @foreach($row->roles as $role)
                            <tr>
                                <td>
                                    @if($can_view_roles)
                                        <a href="{{ route('role.show',$row->id) }}">{{$role->name}}</a>
                                    @else
                                        {{ $role->name }}
                                    @endif
                                </td>
                                <td>{{$role->description}}</td>
                            </tr>
                        @endforeach

                        <!--       @foreach($row->permissions as $permission)
                            <tr>
                                <td><a href="{{ route('permission.show',$row->id) }}">{{$permission->name}}</a></td>
                                            <td>{{$permission->description}}</td>
                                        </tr>
                                    @endforeach  -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
