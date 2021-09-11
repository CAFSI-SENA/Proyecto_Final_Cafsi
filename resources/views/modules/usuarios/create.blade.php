@extends('layouts.admin.app')
@section('title','Crear Usuario')
@section('content')
    <div class="container">
    <div class="row">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Usuarios</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Crear Usuario</a></li>
                    <li class="breadcrumb-item active">Administrador</li>
                </ol>
            </div>
        </div>
        <div class="col-md-6 offset-4">
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="col-md-5">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" required autofocus autocomplete="name" >
                </div>
                <div class="col-md-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-md-5">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" required autocomplete="new-password">
                </div>
                <div class="mt-3">
                    <a href="{{route('user.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button type="sutmit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
