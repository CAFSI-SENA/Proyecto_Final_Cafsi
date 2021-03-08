@extends('layouts.admin.app')
@section('title','Crear Asignación')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="" class="row g-3" method="get">
                <input type="hidden" name="identificacion" value="{{ @$_GET['identificacion'] }}">
                <div class="col-md-2 mt-4">
                    <label for="" class="form-label">Serie</label>
                    <input type="text" name="numero_serie" class="form-control" value="{{ @$_GET['numero_serie'] }}">
                </div>
                <div class="col-md-1 mt-5">
                    <button class="btn btn-outline-secondary" type="submit"><img src="/search.svg" alt=""></button>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="" class="form-label">Categoría</label>
                    <input type="text" class="form-control" value="{{ @$activo->categoria }}">
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" value="{{ @$activo->tipo }}">
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" value="{{ @$activo->marca }}">
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" value="{{ @$activo->modelo }}">
                </div>
            </form>
            <form action="" class="row g-3">
                <input type="hidden" name="numero_serie" value="{{ @$_GET['numero_serie'] }}">
                <div class="col-md-2 mt-4">
                    <label for="">No. Documento</label>
                    <input type="number" value="{{  @$_GET['identificacion'] }}" class="form-control" name="identificacion">
                </div>
                <div class="col-md-1 mt-5">
                    <button type="submit" class="btn btn-outline-secondary"><img src="/search.svg" alt=""></button>
                </div>
                <div class="col-md-4 mt-4">
                    <label for="">Funcionario Prestamo</label>
                    <input type="text" class="form-control" value="{{ @$funcionario->nombres.' '.@$funcionario->apellidos }}">
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Celular</label>
                    <input type="number" class="form-control" value="{{ @$funcionario->celular }}">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Área</label>
                    <input type="text" class="form-control" value="{{ @$funcionario->area }}">
                </div>

            </form>
            <form action="" class="row g-3">
                <div class="col-md-3 mt-4">
                    <label for="fecha_inicio">Fecha Prestamo</label>
                    <input type="datetime-local" class="form-control" name="fecha_inicio">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="tipo_asignacion">Tipo Prestamo</label>
                    <select name="" id="">
                        <option selected disabled value="Seleccione tipo de prestamo"></option>
                        @foreach($tipos_asignaciones as $tipo)
                            @if($tipo->id == @$asignaciones->tipo_asignacion_id)
                                <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="text" class="form-control" name="tipo_asignacion">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="observacion">Observación</label>
                    <input type="text" class="form-control" name="observacion">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="fecha_fin">Fecha Entrega</label>
                    <input type="datetime-local" class="form-control" name="fecha_fin">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="activo_id"></label>
                    <input type="hidden" class="form-control" name="activo_id">
                </div>
                <div class="col-md-3 mt-4">
                    <label for="funcionario_id"></label>
                    <input type="hidden" class="form-control" name="funcionario_id">
                </div>
                <div class="mt-3">
                    <a href="{{route('asignacion.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
