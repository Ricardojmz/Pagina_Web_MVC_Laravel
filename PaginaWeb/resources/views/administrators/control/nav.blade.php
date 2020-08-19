<div id="app">
<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" style="font-size: 18px" href=" {{ route('home') }} "><img src="/img/ecotesch-icon.png" style="width: 40px; height: 40px"> {{config('app.name')}}</a>
    <button class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav nav-pills">
        @auth('admins')
        <li class="nav-item">
            <a class="nav-link {{setActive('control_admin')}}" href=" {{ route('control_admin') }} ">Inicio</a>
        </li>
        <!--
        <li class="nav-item">
            <a class="nav-link {{setActive('portafolio_admin*')}}" href=" {{ route('portafolio_admin') }} ">Control de Productos</a>
        </li>
        -->
        <li class="nav-item">
            <a class="nav-link {{setActive('usuarios_admin*')}}" href="{{ route('usuarios_admin') }}">Control Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesion</a>
        </li>
        @else
        @endauth
    </ul>
    </div>
    </div>
</nav>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>