@extends('administrators/control/layout')
@section('title','Usuarios Admin')
@section('content')
@auth('admins')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4 mb-0">Usuarios</h1>
    </div>
    <p class="lead text-secondary">Como Administrador puedes ver los detalles de los usuarios.</p>
    <hr>
        <ul class="list-group">
            @forelse($users as $usersItem)
    		<li class="list-group-item border-0 mb-3 shadow-sm">
                <a class="d-flex justify-content-between align-items-center text-secondary" href="{{route('usuarios_admin.show', $usersItem) }} ">
                    <span class="font-weight-bold">
                        {{ $usersItem->email}}
                    </span>
                    <span class="text-black-50">
                        {{ $usersItem->name }}
                    </span>
                </a>
            </li>
            @empty
    		<li>No hay Usuarios registrados</li>
            @endforelse
            </ul>
            @else
</div>
@include('/partials.restriccion')
@endauth
@endsection
