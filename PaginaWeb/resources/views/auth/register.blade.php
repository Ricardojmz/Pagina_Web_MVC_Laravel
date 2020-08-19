@extends('layout')
@section('title','Register')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 col-sm-12 col-md-14 col-lg-16 mx-auto principal-reg">
            <section class="my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5 mb-lg-0 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header green levanta text-center">
                                    <h3 class="mt-2"><i class="icon-user-plus"></i> Registrate</h3>
                                </div>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="md-form">
                                            <i class="icon-user5 prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre Completo">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-user2 prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus placeholder="Nombre Usuario">
                                            @error('usuario')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-home6 prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus placeholder="Direccion">
                                            @error('direccion')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-phone_android prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('usuario') }}" required autocomplete="telefono" autofocus placeholder="Telefono">
                                            @error('telefono')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-mail prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-lock1 prefix grey-text" style="background: #fff!important;"></i>
                                            <input type="password" id="form-email" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" >
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-lock1 prefix grey-text" style="background: #fff!important;"></i>
                                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Repite la Contraseña">
                                            @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-10 offset-md-2">
                                            <div class="flex justify-around items-center mt-6 mb-8">
                                                <a v-ripple="'rgba(0, 0, 0, 0.1)'" href="{{route('login')}}" class="flex items-center bg-white py-2 px-4 rounded text-primary transition hover:underline" href="https://aprendible.com/register">
                                                    <i class="icon-fingerprint"></i> Login
                                                </a>
                                                <button class="btn btn-success py-2 px-4 text-white" v-ripple>
                                                    <i class="icon-user-plus"></i> Registrate
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection