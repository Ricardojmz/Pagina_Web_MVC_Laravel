@extends('administrators/control/layout')
@section('title', 'Usuario | ' . $user->name)
@section('content')
@auth('admins')
<div class="container">
	<div class="table-responsive">
        <table class="table table-bordered">
	        <thead class="bg-primary">
	            <tr>
	            	<th scope="col" class="font-weight-bold text-white text-center">Id</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Nombre</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Usuario</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Direccion</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Telefono</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Correo</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Puntos</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Fecha de Creacion</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Codigo QR</th>
	            	<th scope="col" class="font-weight-bold text-white text-center">Acciones</th>
	            </tr>
	        </thead>
	        <tbody>
	            <tr>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->id }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->name }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->usuario }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->direccion }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->telefono }}</td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->email }}</td>
	                <td scope="row" class="font-weight-bold text-center"> {{ $user->puntos }} </td>
	                <td scope="row" class="font-weight-bold text-center">{{ $user->created_at }}</td>
	                <td scope="row" class="font-weight-bold text-center">
	                	<div class="visible-print text-center">
							{!!
								$cad = '';
								$name = $user->name;
								$dir = $user->direccion;
								$tel = $user->telefono;
								$email = $user->email;
								QRCode::meCard($name, $dir, $tel, $email)->svg();
							!!}
						</div>
	                </td>
	                <td scope="row" class="font-weight-bold text-center">
	                	<div class="btn-group btn-group-sm">
	                		<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-user').submit()"><i class="icon-trash3"></i>
	                		</a>
	                		<form id="delete-user" method="POST" action=" {{ route('usuarios_admin.destroy', $user) }} ">
								@csrf @method('DELETE')
							</form>
	                	</div>
	                </td>
	            </tr>
	        </tbody>
	    </table>
	</div>
	<a class="btn btn-link btn-block" href=" {{ route('usuarios_admin') }} ">Cancelar</a>
</div>
@else
    @include('/partials.restriccion')
@endauth
@endsection