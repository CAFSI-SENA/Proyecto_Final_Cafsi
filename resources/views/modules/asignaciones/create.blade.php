@extends('layouts.admin.app')
@section('title','Crear Asignación')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Asignaciones</h4>
            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Asignación</a></li>
                    <li class="breadcrumb-item active">Técnico</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <form action="" class="row g-3" method="get">
                <input type="hidden" name="identificacion" value="{{ @$_GET['identificacion'] }}">
                <div class="col-md-2 mt-4">
                    <label for="" class="form-label">Serie</label>
                    <input type="text" name="numero_serie" class="form-control" value="{{ @$_GET['numero_serie'] }}" style="text-transform:uppercase" onkeyup="javascript:this.value=this.value.toUpperCase(); maxlength="30" required>
                </div>
                @error('numero_serie')
                <small>*{{$message}}</small>
                @enderror
                <div class="col-md-1 mt-5">
                    <button class="btn btn-outline-secondary" type="submit"><img src="/search.svg" alt=""></button>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="" class="form-label">Categoría</label>
                    <input type="text" class="form-control" value="{{ @$activo->categoria }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Tipo</label>
                    <input type="text" class="form-control" value="{{ @$activo->tipo }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" value="{{ @$activo->marca }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Modelo</label>
                    <input type="text" class="form-control" value="{{ @$activo->modelo }}" disabled>
                </div>
            </form>
            <form action="" class="row g-3" method="get">
                <input type="hidden" name="numero_serie" value="{{ @$_GET['numero_serie'] }}">
                <div class="col-md-2 mt-4">
                    <label for="">No. Documento</label>
                    <input type="number" value="{{  @$_GET['identificacion'] }}" class="form-control" name="identificacion" maxlength="15" required>
                </div>
                <div class="col-md-1 mt-5">
                    <button type="submit" class="btn btn-outline-secondary"><img src="/search.svg" alt=""></button>
                </div>
                <div class="col-md-4 mt-4">
                    <label for="">Funcionario Asignacion/Prestamo</label>
                    <input type="text" class="form-control" value="{{ @$funcionario->nombres.' '.@$funcionario->apellidos }}" disabled>
                </div>
                <div class="col-md-2 mt-4">
                    <label for="">Celular</label>
                    <input type="number" class="form-control" value="{{ @$funcionario->celular }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Área</label>
                    <input type="text" class="form-control" value="{{ @$funcionario->area }}" disabled>
                </div>

            </form>
            <form action="{{route('asignacion.store')}}" class="row g-3" method="post">
                @csrf
                <div class="col-md-3 mt-4">
                    <label for="fecha_inicio">Fecha Asignación/Prestamo</label>
                    <input type="datetime" class="form-control" name="fecha_inicio" value="{{ $hora }}" disabled>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="">Tipo de Asignación</label>
                    <select name="tipo_asignacion" id="tipo_asignacion" class="form-select">
                        <option selected disabled value="{{ old('tipo_asignacion') }}">Seleccione tipo de asignación...</option>
                        @foreach($tipos_asignacion as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="observacion">Observación</label>
                    <input type="textarea" class="form-control @error('title') is-invalid @enderror" name="observacion" maxlength="100" value="{{ old('observacion') }}">
                </div>
                <br>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-3 mt-4">
                    <label for="activo_id"></label>
                    <input type="hidden" class="form-control" name="activo_id" value="{{ @$activo->id }}" required>
                </div>
                <div class="col-md-3 mt-4">
                    <label for="funcionario_id"></label>
                    <input type="hidden" class="form-control" name="funcionario_id" value="{{@$funcionario->id}}" required>
                    <input type="hidden" class="form-control" name="estado_id" value="5" required>
                </div>
                <div class="mt-3">
                    <a href="{{route('asignacion.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
