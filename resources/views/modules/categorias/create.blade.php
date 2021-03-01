@extends('layouts.admin.app')
@section('title','Crear Categoría')
@section('content')
    <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-3">
                            <form action="{{route('categoria.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <input type="text" class="form-control" name="categoria" style="text-transform:uppercase"
                                           onkeyup="javascript:this.value=this.value.toUpperCase();" name="categoria" maxlength="25">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" value="1" name="estado_id">
                                </div>
                                <div class="mt-3">
                                    <a href="{{route('categoria.index')}}" class="btn btn-default mb-3">Cancelar</a>
                                    <button type="submit" class="btn btn-primary mb-3">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
@endsection

