@extends('layouts.admin.appreset')
@section('title','Olvido Contraseña?')
@section('content')

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary"> Cambio Contraseña</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="logo.gif" alt="" class="rounded-circle" height="60">
                                            </span>
                                </div>
                            </a>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="p-2">
                            <div class="alert alert-success text-center mb-4" role="alert">
                                Ingrese su correo electrónico y se le enviarán las instrucciones!
                            </div>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required autofocus autocomplete="email">
                                </div>

                                <div class="text-end">
                                    <button type="sutmit" class="btn btn-outline-primary">Enlace Cambio Contraseña</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p><a href="{{route('login')}}" class="fw-medium text-primary"> Ir a Inicio de Sesión</a> </p>
                    <p>© <script>document.write(new Date().getFullYear())</script> Cafsi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

