@extends('administrators/control/layout')
@section('title','Portafolio Admin')
@section('content')
@include('partials.session-status')
@auth('admins')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">@lang('Products')</h1>
        <a class="btn btn-primary" href=" {{ route('portafolio_admin.create') }} ">Agregar Producto</a>
    </div>
    <p class="lead text-secondary">Como Administrador puedes agregar, eliminar y editar productos.</p>
    <hr>
    <ul class="list-group">
    	@forelse($portafolio as $portafolioItem)
    		<li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex justify-content-between align-items-center text-secondary" href=" {{ route('portafolio_admin.show', $portafolioItem) }} ">
                    <span class="font-weight-bold">
                        {{ $portafolioItem->codbarras}}
                    </span>
                    <span class="text-black-50">
                        {{ $portafolioItem->name }}
                    </span>
                </a>
            </li>
    	@empty
    		<li class="list-group-item border-0 mb-3 shadow-sm">No hay productos registrados</li>
    	@endforelse
    	{{ $portafolio->links()  }}
    </ul>
</div>
    @else
    @include('/partials.restriccion')
@endauth
@endsection
