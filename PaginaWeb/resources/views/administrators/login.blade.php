@extends('layout')
@section('title','Login')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 col-sm-12 col-md-14 col-lg-16 mx-auto principal-in ">
            <section class="my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-5 mb-lg-0 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header green levanta text-center">
                                    <h3 class="mt-2"><i class="icon-fingerprint"></i> Login Admin</h3>
                                </div>
                                    <form method="POST" action="{{ route('admin_login') }}">
                                        @csrf
                                        <div class="md-form">
                                            <i class="icon-envelope1 prefix grey-text" style="background: #fff!important;"></i>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="md-form">
                                            <i class="icon-key1 prefix grey-text" style="background: #fff!important;"></i>
                                            <input type="password" id="form-email" class="form-control" name="password" placeholder="Contraseña">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="remember">Recordarme</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <button class="btn btn-success py-2 px-4 text-white" v-ripple>
                                                <i class="icon-fingerprint"></i> Accede
                                            </button>
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
