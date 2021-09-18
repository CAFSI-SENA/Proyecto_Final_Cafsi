@extends('layouts.admin.app')
@section('title','Crear Funcionario')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Funcionarios</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Funcionario</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-12">
            <form action="{{route('funcionario.store')}}" class="row g-3" method="post">
                @csrf
                <div class="col-md-6">
                    <label for="nombres" class="form-label">Nombres</label>
                    <input type="text" name="nombres" class="form-control" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombres" maxlength="30">
                </div>
                <div class="col-md-6">
                    <label for="apellidos" class="form-label">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="apellidos" maxlength="30">
                </div>
                <div class="col-md-3">
                    <label for="tipo_identificacion_id" class="form-label">Tipo Identificación</label>
                    <select name="tipo_identificacion_id" id="tipo_identificacion_id" class="form-select">
                        <option selected disabled value="">Seleccione tipo identificación...</option>
                        @foreach($tiposidentificacion as $tipoidentificacion)
                            <option value="{{$tipoidentificacion->id}}">{{$tipoidentificacion->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="identificacion" class="form-label">Identificación</label>
                    <input type="number" name="identificacion" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" name="telefono" class="form-control">
                </div>
                <div class="col-md-3">
                    <label for="celular" class="form-label">Celular</label>
                    <input type="number" name="celular" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="area_id" class="form-label">Área</label>
                    <select name="area_id" id="area_id" class="form-select">
                        <option selected disabled value="">Seleccione área...</option>
                        @foreach($areas as $area)
                            <option value="{{$area->id}}">{{$area->area}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="genero_id" class="form-label">Género</label>
                    <select name="genero_id" id="genero_id" class="form-select">
                        <option selected disabled value="">Seleccione género...</option>
                        @foreach($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->genero}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <input type="hidden" name="estado_id" value="1">
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="col-md-4">
                    <a href="{{route('funcionario.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection

