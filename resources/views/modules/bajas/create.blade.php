@extends('layouts.admin.app')
@section('title','Crear Baja')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="" class="row g-3" method="get">
                    <div class="col-md-2 mt-4">
                        <label for="numero_serie">Serie</label>
                        <input type="text" class="form-control" name="numero_serie" value="{{$_GET['numero_serie']}}">
                    </div>
                    <div class="col-md-1 mt-5">
                        <button class="btn btn-outline-secondary"><img src="/search.svg" alt=""></button>
                    </div>
                    <div class="col-md-2">
                        <label for="categoria_id">Categoría</label>
                        <input type="text" class="form-control" name="categoria_id" value="{{$activos->categoria}}">
                    </div>
                    <div class="col-md-2">
                        <label for="tipo_activo_id">Tipo</label>
                        <input type="text" class="form-control" name="tipo_activo_id" value="{{$activos->tipo}}">
                    </div>
                    <div class="col-md-2">
                        <label for="marca_id">Marca</label>
                        <input type="text" class="form-control" name="marca_id" value="{{$activos->marca}}">
                    </div>
                    <div class="col-md-2">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" name="modelo" value="{{$activos->modelo}}">
                    </div>
                </form>

            </div>


            <div class="">
                <form action="{{route('baja.store')}}" method="post" class="row g-3">
                    @csrf
                    <div class="col-md-3" style="display: none;">
                        <label for="activo_id">Id Activo</label>

                            <input type="text" name="activo_id" value="{{$activos->id}}" class="form-control">

                    </div>

                    <div class="col-md-3">
                        <label for="">Fecha</label>
                        <input type="date" value="<?php echo date("Y-m-d");?>" name="fecha_baja" class="form-control">
                    </div>
                    <div class="col-md-3">
                        <label for="">Tipo de Baja</label>
                        <select name="tipo_baja_id" id="tipo_baja_id" class="form-select">
                            <option selected disabled value="">Seleccione tipo baja...</option>
                            @foreach($tiposbaja as $tipo)
                                <option class="form-select" value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Observación</label>
                        <input type="text" class="form-control" name="observacion">
                    </div>

                    <input type="hidden" value="{{Auth::user()->id}}" name="usuario_id">
                    <div class="mb-3">
                        <a href="{{route('baja.index')}}" class="btn btn-outline-default">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                </form>

            </div>

        </div>
    </div>
@endsection
