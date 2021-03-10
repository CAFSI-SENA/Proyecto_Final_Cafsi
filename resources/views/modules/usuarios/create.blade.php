@extends('layouts.admin.app')
@section('title','Crear Usuario')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-4">
            <form action="{{route('usuario.store')}}" method="post">
                @csrf
                <div class="col-md-5">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="col-md-5">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="col-md-5">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mt-3">
                    <a href="{{route('usuario.index')}}" class="btn btn-outline-dark">Cancelar</a>
                    <button type="sutmit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <div class="mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-jet-button class="ml-4">
                {{ __('Register') }}
            </x-jet-button>
        </div>
    </form>
@endsection
