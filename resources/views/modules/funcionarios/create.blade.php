@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('funcionario.store')}}" class="row g-3" method="post">
                    @csrf
                    <div class="col-md-6">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" name="nombres" class="form-control" style="text-transform:uppercase" required>
                    </div>
                    <div class="col-md-6">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" name="apellidos" class="form-control" style="text-transform:uppercase" required>
                    </div>
                    <div class="col-md-3">
                        <label for="tipo_identificacion_id" class="form-label">Tipo Identificación</label>
                        <select name="tipo_identificacion_id" id="tipo_identificacion_id" class="form-select">
                            @foreach($tiposidentificacion as $tipoidentificacion)
                                <option value="{{$tipoidentificacion->id}}">{{$tipoidentificacion->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="identificacion" class="form-label">Identificación</label>
                        <input type="number" name="identificacion" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" name="telefono" class="form-control" required>
                    </div>
                    <div class="col-md-3">
                        <label for="celular" class="form-label">Celular</label>
                        <input type="number" name="celular" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="area_id" class="form-label">Área</label>
                        <select name="area_id" id="area_id" class="form-select">
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->area}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="genero_id" class="form-label">Genero</label>
                        <select name="genero_id" id="genero_id" class="form-select">
                            @foreach($generos as $genero)
                                <option value="{{$genero->id}}">{{$genero->genero}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="estado_id" class="form-label">Estado</label>
                        <select name="estado_id" id="estado_id" class="form-select">
                            @foreach($estados as $estado)
                                <option value="1">Activo</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('funcionario.index')}}" class="btn btn-default mb-3">Cancelar</a>
                        <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

