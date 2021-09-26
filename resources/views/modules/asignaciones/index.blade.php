@extends('layouts.admin.app')
@section('title','Listado Asignaciones')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Asignaciones</h4>
            @if(Session::has('error'))
                <div class="alert alert-warning alert-dismissible" role="alert">
                    {{Session::get('error')}}
                </div>
            @endif
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Asignación</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <form action="" method="get">
            <div class="row ">
                <div class="col-2">
                    <a href="{{route('asignacion.create')}}" class="btn btn-primary">Crear Asignación</a>
                </div>
                    <div class="col-2 p-0">
                        <input type="text" class="form-control" placeholder="Serie" name="numero_serie" >
                    </div>
                    <div class="col-sm-1 p-0">
                        <button class="btn btn-outline-secondary" type="submit"><img src="/search.svg" alt=""></button>
                    </div>
                <div class="col">
                    <a href="{{route('asignacion.export')}}" class="btn btn-primary float-end">Reporte Asignaciones</a>
                </div>

            </div>
            </form>
            <div class="table-responsive table-hover table-bordered mt-md-3">
                <table class="table table-bordered">
                    <tbody>
                    <th>No.</th>
                    <th>Serie</th>
                    <th>Tipo Activo</th>
                    <th>Funcionario Asignación/Prestamo</th>
                    <th>Tipo de Asignación</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Entrega</th>
                    <th>Opciones</th>
                    </tbody>
                    <tbody>
                    @foreach($asignaciones as $asignacion)
                        <tr>
                            <td>{{$asignacion->id}}</td>
                            <td>{{$asignacion->numero_serie}}</td>
                            <td>{{$asignacion->tipo}}</td>
                            <td>{{$asignacion->nombres.' '.$asignacion->apellidos}}</td>
                            <td>{{$asignacion->tipo_asignacion}}</td>
                            <td>{{$asignacion->fecha_inicio}}</td>
                            <td>{{$asignacion->fecha_fin}}</td>
                            <td>
                                <a href="{{ route('asignacion.show', $asignacion->id) }}" class="btn btn-sm btn-outline-info"><img src="/eye.svg" alt="Ver"></a><a href="{{ route('asignacion.edit', $asignacion->id) }}" class="btn btn-sm btn-outline-warning"><img src="/pencil-square.svg" alt="Editar"></a><a href="{{ route('asignacion.destroy') }}" class="btn btn-sm btn-outline-danger"><img src="/trash.svg" alt="Eliminar"></a>
                                <!--<button type="submit" class="btn btn-sm btn-outline-danger">
                                </button>-->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{$asignaciones->links('pagination::bootstrap-4')}}
@endsection
