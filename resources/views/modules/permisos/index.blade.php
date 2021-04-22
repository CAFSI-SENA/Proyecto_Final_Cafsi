@extends('layouts.admin.app')
@section('title','Listado Permisos')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
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
                @foreach($rows as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><a href="{{route('permission.show',$row->id)}}">{{$row->name}}</a></td>
                        <td>{{$row->description}}</td>
                        <td>{{$row->guard_name}}</td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
                        <td width="10px">
                            <a class="btn btn-primary" href="{{route('permission.show',$row->id)}}">Detalle</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
