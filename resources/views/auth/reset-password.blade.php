@extends('layouts.admin.appreset')
@section('title','Cambio de Contraseña')
@section('content')

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Cambio de Contraseña</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="index.html">
                                    <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="/logo.gif" alt="" class="rounded-circle" height="60">
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
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email" autofocus autocomplete="email" placeholder="Ingrese email" required >
                                        <div class="invalid-feedback">
                                            Please Enter Email
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Contraseña</label>
                                        <input type="password" class="form-control" name="password" id="password" autocomplete="new-password" placeholder="Ingresar contraseña" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password_confirmation">Confirmar Contraseña</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" autocomplete="new-password" placeholder="Confirmar contraseña" required>
                                        <div class="invalid-feedback">
                                            Please Enter Password
                                        </div>
                                    </div>

                                    <div class="mt-4 d-grid">
                                        <button type="sutmit" class="btn btn-primary waves-effect waves-light">Cambio Contraseña</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <div>
                            <p>Ya tienes una cuenta ? <a href="{{route('login')}}" class="fw-medium text-primary"> Inicio de Sesión</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Cafsi.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>












        </form>
@endsection
