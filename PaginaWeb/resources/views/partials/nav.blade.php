<div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">
            <div class="container">
                <a class="navbar-brand" style="font-size: 18px" href=" {{ route('home') }} "><img src="/img/logo.png" style="width: 40px; height: 40px"> {{config('app.name')}}</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{setActive('home')}}" href="{{ route('home') }}">
                                <i class="icon-home5" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{setActive('about')}}" href=" {{ route('about') }} ">
                                <i class="icon-users2" aria-hidden="true"></i> @lang('About')
                            </a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link {{setActive('portafolio')}}" href="{{ route('portafolio') }} ">
                                <i class="icon-rocket2" aria-hidden="true"></i> @lang('Products')
                            </a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a class="nav-link {{setActive('contact')}}" href="{{route('contact')}}">
                                <i class="icon-message" aria-hidden="true"></i> @lang('Contact')
                            </a>
                        </li>
                        @guest
                        <li class="nav-item">
                            <a class="nav-link {{setActive('login')}}" href="{{ route('login') }}">
                                <i class="icon-fingerprint" aria-hidden="true"></i> Login
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{setActive('register')}}" href="{{route('register')}}">
                                <i class="icon-person" aria-hidden="true"></i> Registrate
                            </a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link {{setActive('cuenta')}}" href="{{route('cuenta')}}">
                                <i class="icon-user-circle" aria-hidden="true"></i> Mi Cuenta
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="icon-sign-in" aria-hidden="true"></i> Cerrar Sesion
                            </a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
    </form>