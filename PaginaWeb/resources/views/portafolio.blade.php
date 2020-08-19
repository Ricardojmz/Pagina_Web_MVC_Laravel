@extends('layout')
@section('title','Portafolio')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-10 col-sm-12 col-md-14 col-lg-16 mx-auto principal bg-white shadow">
                <h1 style="margin-top: 25px;" class="font-weight-bold text-center">
                    Lista de Productos Participantes
                </h1>
                <p class="text-center">Esta es la lista de los productos que son validos en el escaneo de la Aplicacion Movil.</p>
                <hr>
                <div class="container">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-success">
                                <tr>
                                    <th class="font-weight-bold text-white text-center">Codigo de Barras</th>
                                    <th class="font-weight-bold text-white text-center">Nombre</th>
                                    <th class="font-weight-bold text-white text-center">Descripcion</th>
                                <tr>
                            </thead>
                            <tbody>
                                @foreach($portafolio as $portafolioItem)
                                <tr>
                                    <td class="font-weight-bold text-center">{{ $portafolioItem->codbarras}}</td>
                                    <td class="font-weight-bold text-center">{{ $portafolioItem->name}}</td>
                                    <td class="font-weight-bold text-center">{{ $portafolioItem->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            {{ $portafolio->links() }}
        </div>
    </div>
</div>
@endsection