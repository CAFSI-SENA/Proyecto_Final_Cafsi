@extends('layouts.admin.app')
@section('title','Crear Activo')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('activo.store')}}" method="post" class="row g-3">
                @csrf
                <div class="col-md-4">
                    <label for="">No. Serie</label>
                    <input type="text" class="form-control" name="numero_serie" required>
                </div>
                <div class="col-md-4">
                    <label for="categoria_id">Categoría</label>
                    <select name="categoria_id" id="categoria_id" class="form-select">
                        <option selected disabled value="">Seleccione categoría...</option>
                        @foreach($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="tipo_activo_id">Tipo</label>
                    <select name="tipo_activo_id" id="tipo_activo_id" class="form-select">
                        <option selected disabled value="">Seleccione tipo activo...</option>
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="marca_id">Marca</label>
                    <select name="marca_id" id="marca_id" class="form-select">
                        <option selected disabled value="">Seleccione marca...</option>
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
                    <input type="hidden" name="estado_id" value="1">
                </div>
                <div class="mb-3">
                    <a href="{{route('activo.index')}}" class="btn btn-default">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
