@extends('layouts.admin.app')
@section('title', 'Listado de permisos')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id="usuarios">
                <thead>
                <tr>
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
                        <td><a href="{{route('permission.show',$row->id)}}">{{$row->name}}</a></td>
                        <td>{{$row->description}}</td>
                        <td>{{$row->guard_name}}</td>
                        <td>{{$row->created_at->diffForHumans()}}</td>
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
