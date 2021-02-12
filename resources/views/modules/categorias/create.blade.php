@extends('layouts.admin.app')
@section('content')
    <div class="container">
                    <div class="row">
                        <div class="col-md-6 offset-3">
                            <form action="{{route('categoria.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="categoria">Categoría</label>
                                    <input type="text" class="form-control" name="categoria">
                                </div>
                                <div class="form-group">
                                    <label for="estado_id">Estado</label>
                                    <select name="estado_id" id="estado_id" class="form-control">
                                        <option value="1">Activo</option>
                                    </select>
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

