@extends('administrators/control/layout')
@section('title','Control Administrador')
@section('content')
@auth('admins')
@include('partials.session-status')
<div class="container">
	<div class="row">
		<div class="col-12 col-lg-6">
			<h1 class="display-4 text-primary">Hola Admin</h1>
    		<p class="lead text-secondary">Como administrador tienes control sobre los usuarios.</p>
    		<!--
    		<a class="btn btn-lg btn-block btn-primary" href="{{route('portafolio_admin')}} ">Productos</a>
    		-->
    		<a class="btn btn-lg btn-block btn-outline-primary" href="{{route('usuarios_admin')}} ">Usuarios</a>
		</div>
		<div class="col-12 col-lg-6">
			<img class="img-fluid mb-4 my-4" src="/img/home.svg" alt="Administrador">
		</div>
	</div>
</div>
@else
    @include('/partials.restriccion')
@endauth
@endsection