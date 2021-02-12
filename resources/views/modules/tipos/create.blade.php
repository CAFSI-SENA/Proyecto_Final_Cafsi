@extends('layouts.admin.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <form action="{{route('tipo.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="tipo">Tipo Activo</label>
                        <input type="text" class="form-control" name="tipo">
                    </div>
                    <div class="form-group">
                        <label for="estado_id">Estado</label>
                        <select name="estado_id" id="estado_id" class="form-control">
                            <option value="1">Activo</option>
                        </select>
                    </div>
                    <br>
                    <a href="{{route('tipo.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button class="btn btn-primary mb-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
