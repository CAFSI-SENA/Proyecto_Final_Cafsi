@extends('layouts.admin.app')
@section('title','Crear Área')
@section('content')
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Áreas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Área</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 offset-3 mt-3">
            <form action="{{route('area.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="area">Área</label>
                    <input type="text" class="form-control" name="area" style="text-transform:uppercase"
                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="area" maxlength="20">
                </div>
                <br>
                @error('area')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <input type="hidden" name="estado_id" value="1">
                </div>
                <a href="{{route('area.index')}}" class="btn btn-default">Cancelar</a>
                <button class="btn btn-primary mt-3 mb-3">Guardar</button>
            </form>
        </div>
    </div>
@endsection

