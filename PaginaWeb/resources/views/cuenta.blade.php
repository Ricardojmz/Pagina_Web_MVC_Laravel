@extends('layout')
@section('title','Mi cuenta | ' . auth()->user()->name)
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-10 col-sm-12 col-md-14 col-lg-16 mx-auto principal-in bg-white shadow">
        	<h4 style="margin-top: 25px;" class="text-center display-4">Hola</h4>
        	<p class="text-center font-weight-bold"> {{auth()->user()->email}}</p>
            <p class="text-center">En esta seccion podras ver tu perfil detalladamente</p>
            <hr>
            <div class="container">
            	<div class="table-responsive">
            		<table class="table table-bordered">
	                	<thead class="bg-success">
	                    	<tr>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Nombre</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Usuario</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Direccion</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Telefono</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Correo</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Puntos</th>
	                        	<th scope="col" class="font-weight-bold text-white text-center">Codigo QR</th>
	                    	</tr>
	                	</thead>
	                	<tbody>
	                    	<tr>
	                        	<td scope="row" class="font-weight-bold text-center">{{ auth()->user()->name }}</td>
	                        	<td class="font-weight-bold text-center">{{ auth()->user()->usuario}}</td>
	                        	<td class="font-weight-bold text-center">{{ auth()->user()->direccion}}</td>
	                        	<td class="font-weight-bold text-center">{{ auth()->user()->telefono}}</td>
	                        	<td class="font-weight-bold text-center">{{ auth()->user()->email}}</td>
	                        	<td class="font-weight-bold text-center"> {{auth()->user()->puntos}} </td>
	                        	<td class="font-weight-bold text-center">
	                        		<div class="text-center">
	                        			{!!
	                        				$cad = '';
											$name = auth()->user()->name;
											$email = auth()->user()->email;
											$dir = auth()->user()->direccion;
											$tel = auth()->user()->telefono;
											$qr = QRCode::meCard($name, $dir, $tel, $email)->svg();
										!!}
	                        		</div>
	                        	</td>
	                    	<tr>
	                	</tbody>
            		</table>
            	</div>
            </div>
        </div>
    </div>
</div>
@else
    <script type="text/javascript">
        alert("Tienes que estar logeado para ingresar a esta seccion");
        window.location="{{ route('login') }}";
    </script>
@endauth
@endsection