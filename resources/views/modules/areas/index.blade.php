@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <a href="{{route('area.create')}}" class="btn btn-primary">Crear Área</a>

                @if(session('message'))
                    <div class="alert alert-{{session('type')}} mt-2" role="alert">
                        {{session('message')}}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered mt-3">
                        <thead>
                        <tr>
                            <th>Área</th>
                            <th>Estado</th>
                            <th>Fecha Creación</th>
                            <th>Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($areas as $area)
                            <tr>
                                <td>{{$area->area}}</td>
                                @foreach($estados as $estado)
                                    @if($estado->id == $area->estado_id)
                                        <td>{{$estado->estado}}</td>
                                    @endif
                                @endforeach
                                <td>{{$area->created_at}}</td>
                                <td>
                                    <form action="{{route('area.destroy',$area->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('area.show',$area->id)}}" class="btn btn-info">Detalles</a>
                                        <a href="{{route('area.edit',$area->id)}}" class="btn btn-warning">Editar</a>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection



