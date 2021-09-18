@extends('layouts.admin.app')
@section('title','Crear Tipo')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Tipos Activo</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Tipo Activo</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-4">
            <form action="{{route('tipo.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="tipo">Tipo Activo</label>
                    <input type="text" class="form-control" name="tipo" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="tipo" maxlength="20">
                </div>
                <br>
                @error('tipo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <input type="hidden" name="estado_id" value="1">
                </div>
                <br>
                <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Cancelar</a>
                <button class="btn btn-primary mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection
