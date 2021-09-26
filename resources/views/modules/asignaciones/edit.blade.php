@extends('layouts.admin.app')
@section('title','Actualizar Asignación')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Devoluciones</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Devolución</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <form action="{{ route('asignacion.update', $activo->id) }}" class="row g-3" method="post">
                @csrf
                @method('PUT')
                <div class="col-md-3 mt-4">
                    <label for="" class="form-label">Serie</label>
                    <input type="text" name="numero_serie" class="form-control" value="{{ $activo->numero_serie }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="" class="form-label">Categoría</label>
                    <input type="text" class="form-control" value="{{ $activo->categoria }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" value="{{ $activo->tipo }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" value="{{ $activo->marca }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" value="{{ $activo->modelo }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">No. Documento</label>
                    <input type="number" value="{{ $activo->identificacion }}" class="form-control" disabled>
                </div>
                <div class="col-md-4 mt-4">
                    <label for="">Funcionario Asignación/Prestamo</label>
                    <input type="text" class="form-control" value="{{ $activo->nombres.' '.$activo->apellidos }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Celular</label>
                    <input type="number" class="form-control" value="{{ $activo->celular }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Área</label>
                    <input type="text" class="form-control" value="{{ $activo->area }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Estado</label>
                    <input type="text" class="form-control" value="{{ $activo->estado }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="fecha_inicio">Fecha Asignación/Prestamo</label>
                    <input type="datetime" class="form-control" name="fecha_inicio" value="{{ $activo->fecha_inicio}}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Tipo de Asignación</label>
                    <input type="text" class="form-control" value="{{ $activo->tipo}}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="fecha_fin">Fecha Entrega</label>
                    <input type="datetime" class="form-control" name="fecha_fin" value="{{ $hora }}">
                </div>
                <div class="col-md-5 mt-4">
                    <label for="observacion">Observación</label>
                    <input type="textarea" class="form-control" name="observacion" value="{{ $activo->observacion}}">
                </div>
                <div class="col-md-3 mt-4">
                    <input type="hidden" class="form-control" name="estado_id" value="7">
                </div>
                <div class="mt-3">
                    <a href="{{route('asignacion.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
