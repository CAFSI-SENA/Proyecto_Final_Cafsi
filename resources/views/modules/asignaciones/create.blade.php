@extends('layouts.admin.app')
@section('title','Crear Asignación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="">
                    <div class="form-group">
                        <label for="fecha_inicio">Fecha</label>
                        <input type="datetime-local" disabled class="form-control" value="{{date('d-m-Y')}}" name="fecha_inicio">
                    </div>
                    <div class="form-group">
                        <label for="">Serie</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
