@extends('layouts.admin.app')
@section('title','Crear Marca')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Marcas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Marca</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
            <form action="{{route('marca.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="marca" maxlength="20">
                </div>
                <div class="form-group">
                    <input type="hidden" value="1" name="estado_id">
                </div>
                <br>
                <a href="{{route('marca.index')}}" class="btn btn-default mb-3">Cancelar</a>
                <button type="submit" class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection
