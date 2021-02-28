@extends('layouts.admin.app')
@section('title','Crear Baja')
@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{route('activo.search')}}" class="row g-3">
                        <div class="col-md-3 ml-3">
                            <label for="">No. Serie</label>
                            <input type="text" class="form-control" name="numero_serie">
                        </div>
                        <div class="col-md-3 mt-3">
                            <button type="submit" class="btn btn-outline-primary">Buscar</button>
                        </div>
                        @foreach($activos as $activo)
                        <div class="col-md-3 ml-3">
                            <label for="">Categoría</label>
                            <input type="text" class="form-control" value="{{$activo->categoria}}">
                        </div>
                        <div class="col-md-3 ml-3">
                            <label for="">Tipo</label>
                                @foreach($tipos as $tipo)
                                    @if($activo->tipo_activo_id == $tipo->id)
                                        <input type="text" class="form-control" value="{{$tipo->tipo}}">
                                    @endif
                                @endforeach
                                    <input type="hidden" value="{{$activo->id}}" name="activo_id">
                        </div>
                        <div class="col-md-3">
                            <label for="">Marca</label>
                                @foreach($marcas as $marca)
                                    @if($activo->marca_id == $marca->id)
                                        <input type="text" class="form-control" value="{{$marca->marca}}">
                                    @endif
                                @endforeach
                        </div>
                        <div class="col-md-3 ml-3">
                            <label for="modelo">Modelo</label>
                            <input type="text" class="form-control" value="{{$activo->modelo}}">
                        </div>
                        <div class="col-md-3 ml-3">
                            <label for="fecha_adquisicion">Fecha Adquisición</label>
                            <input type="text" class="form-control" value="{{$activo->fecha_adquisicion}}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="estado_id">Estado</label>
                                @foreach($estados as $estado)
                                    @if($activo->estado_id == $estado->id)
                                        <input type="text" class="form-control" value="{{$estado->estado}}">
                                    @endif
                                @endforeach
                        </div>
                        @endforeach
                </form>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <form action="{{route('baja.store')}}" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-3" style="display: none;">
                                <label for="activo_id">Id Activo</label>
                                @foreach($activos as $activo)
                                <input type="text" name="activo_id" value="{{$activo->id}}" class="form-control">
                                @endforeach
                            </div>

                            <div class="col-md-3">
                                <label for="">Fecha</label>
                                <input type="date" value="<?php echo date("Y-m-d");?>" name="fecha_baja" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label for="">Tipo de Baja</label>
                                <select name="tipo_baja_id" id="tipo_baja_id" class="form-select">
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

        </div>
    </div>
@endsection
