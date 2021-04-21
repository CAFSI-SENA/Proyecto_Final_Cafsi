@extends('layouts.admin.app')
@section('title', 'Edición de rol')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('rol.update',$row->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <table class="table">
                            <tbody>
                            <th>Nombre</th>
                            <td><input type="text" class="form-control" value="{{$row->name}}" name="name"></td>
                            </tbody>
                            <tbody>
                            <th>Descripción</th>
                            <td><input type="text" class="form-control" value="{{$row->description}}" name="description"></td>
                            </tbody>
                        </table>
                        <div class="card">
                            <div class="card-body">
                                <h5>Asignación de permisos</h5>
                                @foreach($permissions as $permission)
                                    <div class="col-12">
                                        {!! Form::checkbox(
                                            "permission[{$permission->id}]",
                                            $permission->id,
                                            //['label' => $permission->name]
                                            //null no selecciona ninguna casilla
                                            //count($row->permissions->where('id', $permission->id)), muestra las casillas seleccionadas previamente
                                            $row->hasPermissionTo($permission->id),
                                            )
                                        !!}
                                        {{$permission->description}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{route('rol.index')}}" class="btn btn-outline-dark">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
@endsection
