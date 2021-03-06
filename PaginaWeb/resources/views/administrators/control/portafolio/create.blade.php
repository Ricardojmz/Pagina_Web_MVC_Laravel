@extends('administrators/control/layout')
@section('title','Insertar Producto')
@section('content')
@include('partials.session-status')
@auth('admins')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{route('portafolio_admin.store')}}">
                <h1 class="display-4">Insertar Producto</h1>
                @csrf
                <div class="form-group">
                    <label for="codbarras">Codigo de barras</label>
                    <input class="form-control border-0 bg-light shadow-sm @error('codbarras') is-invalid @else @enderror" id="codbarras" type="text" name="codbarras" value="{{old('code')}}">
                    @error('codbarras')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
    	           <label for="name">Nombre del Producto</label>
    	           <input class="form-control border-0 bg-light shadow-sm @error('name') is-invalid @else @enderror" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input class="form-control border-0 bg-light shadow-sm @error('url') is-invalid @else @enderror" type="text" name="url" value="{{old('url')}}">
                    @error('url')
                    <span class="invalid-feedback" role="alert">
                        <strong> {{ $message }} </strong>
                    </span>
                    @enderror
                    </div>
                <div class="form-group">
                    <label for="description">Descripcion del Producto</label>
                    <textarea class="form-control border-0 bg-light shadow-sm @error('description') is-invalid @else @enderror" name="description">{{old('description')}}</textarea>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btm-lg btn-block">Guardar</button>
                    <a class="btn btn-link btn-block btn-outline-primary" href=" {{ route('portafolio_admin') }} ">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@else
@include('/partials.restriccion')
@endauth
@endsection
