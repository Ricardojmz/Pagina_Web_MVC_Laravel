@extends('administrators/control/layout')
@section('title', 'Producto | ' . $product->codbarras)
@section('content')
@include('partials.session-status')
@auth('admins')
<div class="container">
	<div class="table-responsive">
        <table class="table table-bordered">
	        <thead class="bg-primary">
	            <tr>
	            	<th scope="col" class="font-weight-bold text-white text-center">Codigo</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Nombre</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Descripcion</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Opciones</th>
	            </tr>
	        </thead>
	        <tbody>
	            <tr>
	                <td scope="row" class="font-weight-bold text-center">{{ $product->codbarras }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $product->name }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $product->description }}</td>
	                <td scope="row" class="font-weight-bold text-center">
	                	<div class="btn-group btn-group-sm">
							<a class="btn btn-primary" href=" {{ route('portafolio_admin.edit', $product) }} "><i class="icon-create"></i></a>
							<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-product').submit()"><i class="icon-trash3"></i></a>
							<form class="d-none" id="delete-product" method="POST" value="{{ route('portafolio_admin.destroy', $product) }} ">
								@csrf @method('DELETE')
							</form>
						</div>
					</td>
	            </tr>
	        </tbody>
	    </table>
	</div>
	<a class="btn btn-link btn-block" href="{{route('portafolio_admin')}}">Regresar</a>
</div>
@else
@include('/partials.restriccion')
@endauth
@endsection