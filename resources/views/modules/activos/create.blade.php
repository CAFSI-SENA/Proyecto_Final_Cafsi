@extends('layouts.admin.app')
@section('section')


                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{route('activo.store')}}" method="post" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="nombre_activo">Nombre Activo</label>
                                    <input type="text" class="form-control" name="nombre_activo" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="">No. Serie</label>
                                    <input type="text" class="form-control" name="numero_serie" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="categoria_id">Categoría</label>
                                    <select name="categoria_id" id="categoria_id" class="form-select">
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tipo_activo_id">Tipo</label>
                                    <select name="tipo_activo_id" id="tipo_activo_id" class="">
                                        @foreach($tipos as $tipo)
                                            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="marca_id">Marca</label>
                                    <select name="marca_id" id="marca_id" class="form-select">
                                        @foreach($marcas as $marca)
                                            <option value="{{$marca->id}}">{{$marca->marca}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="modelo">Modelo</label>
                                    <input type="text" class="form-control" name="modelo">
                                </div>
                                <div class="col-md-4">
                                    <label for="fecha_adquisicion">Fecha Adquisición</label>
                                    <input type="date" class="form-control" name="fecha_adquisicion">
                                </div>
                                <div class="col-md-4">
                                    <label for="estado_id">Estado</label>
                                    <select name="estado_id" id="estado_id" class="form-select">
                                        @foreach($estados as $estado)
                                            <option value="1">{{$estado->estado}}</option>
                                        @endforeach
                                    </select>
                                    <input type="text">
                                </div>
                                <div class="mb-3">
                                    <a href="{{route('activo.index')}}" class="btn btn-default">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>

                            </form>
                        </div>
                    </div>

@endsection
