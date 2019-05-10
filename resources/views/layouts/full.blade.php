<!DOCTYPE html>{{--<html lang="{{ app()->getLocale() }}">--}}
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/template.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!-- Navigation -->
        <div class="hero">
            <nav class="navbar-hero container">
                <div class="row">
                    <div class="col-4">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="col-8 nav-hero-right">
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            <a class="nav-link" href="{{ route('register') }}">Créer un compte</a>
                        @else
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Bonjour {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>


        @include("_header")

        <main id="pjax-container" class="container">
            @yield('content')
        </main>

        @auth
            <a href="/nouvelle" data-pjax>Insérer une musique</a><br><br>
        @endauth
        @include("_footer")
        <nav class="navbar-audio">
            <audio id="audio" controls src=""></audio>
        </nav>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.pjax.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>