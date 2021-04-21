@extends('layouts.admin.app')
@section('title','Crear Usuario')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" :value="old('name')">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" :value="old('email')">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirmación de Password</label>
                        <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <br>
                    <a href="{{route('user.index')}}" class="btn btn-default mb-3">Cancelar</a>
                    <button type="submit" class="btn btn-outline-primary mb-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
