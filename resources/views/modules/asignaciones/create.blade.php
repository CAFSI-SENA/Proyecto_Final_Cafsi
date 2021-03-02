@extends('layouts.admin.app')
@section('title','Crear Asignación')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="">
                    <div class="form-group">
                        <label for="">Fecha</label>
                        <input type="datetime-local" class="form-control">
                    </div>
                    <div class="form-group">
                        <script>document.write(new Date().getDate())</script>
                        <label for="">Serie</label>
                        <input type="text" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
