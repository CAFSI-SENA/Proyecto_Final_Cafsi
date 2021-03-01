@extends('layouts.admin.app')
@section('title','Crear Marca')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
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
    </div>
@endsection
