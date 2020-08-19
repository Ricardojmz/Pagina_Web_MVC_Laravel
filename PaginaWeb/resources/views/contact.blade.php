@extends('layout')
@section('title','Contacto')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 col-sm-12 col-md-14 col-lg-16 mx-auto shadow principal bg-white">
            <div class="container">
            <section class="my-5">
                @include('partials.session-status')
                <h2 class="h1-responsive font-weight-bold text-center my-5 green-text">Contáctanos</h2>
                    <p class="text-center w-responsive mx-auto mb-5">
                        En esta sección puedes contactarnos, llena todos los campos con tus datos correctos, no es necesario estar registrado para poder mandar un mensaje.
                    </p>
                        <div class="row">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form method="POST" action="{{route('contact')}}">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <i class="icon-user prefix grey-text" style="background: #fff!important;"></i>
                                                <input type="text" id="contact-name" class="form-control @error('name') is-invalid @else border-1 @enderror" value="{{old('name')}}" name="name" placeholder="Nombre">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong> {{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <i class="icon-envelope1 prefix grey-text" style="background: #fff!important;"></i>
                                                <input type="text" id="contact-email" class="form-control @error('name') is-invalid @else border-1 @enderror" value="{{old('email')}}" name="email" placeholder="Correo">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong> {{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <i class="icon-subject prefix grey-text" style="background: #fff!important;"></i>
                                                <input type="text" id="contact-Subject" class="form-control @error('name') is-invalid @else border-1 @enderror" value="{{old('subject')}}" name="subject" placeholder="Asunto">
                                                @error('subject')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong> {{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <i class="icon-textsms prefix grey-text" style="background: #fff!important;"></i>
                                                <textarea id="contact-message" class="form-control md-textarea @error('name') is-invalid @else border-1 @enderror" rows="3" name="content" placeholder="Mensaje"></textarea>
                                                @error('content')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong> {{ $message }} </strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center text-md-left">
                                        <button class="btn btn-success"><i class="icon-send"></i> Enviar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <i class="icon-location fa-2x green-text"></i>
                                        <p>La candelaria Tlapala, 56641 Chalco de Días Covarrubias, Méx.</p>
                                    </li>
                                    <li>
                                        <i class="icon-phone fa-2x mt-4 green-text"></i>
                                        <p>5612671456</p>
                                    </li>
                                    <li>
                                        <i class="icon-email1 fa-2x mt-4 green-text"></i>
                                        <p class="mb-0">ecotesch@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
            </section>
        </div>
        </div>
    </div>
</div>
@endsection