@extends('layouts.admin.app')
@section('title','Crear Tipo')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <form action="{{route('tipo.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo Activo</label>
                        <input type="text" class="form-control" name="tipo" style="text-transform:uppercase"
                               onkeyup="javascript:this.value=this.value.toUpperCase();" name="tipo" maxlength="20">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="estado_id" value="1">
                    </div>
                    <br>
                    <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button class="btn btn-primary mb-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
