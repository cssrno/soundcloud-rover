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
                    <div class="col-md-4">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="col-md-8">
                        <!-- Authentication Links -->
                        @guest
                            <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            <a class="nav-link" href="{{ route('register') }}">Créer un compte</a>
                        @else
                            Bonjour {{ Auth::user()->name }}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </nav>
        </div>
        <main id="pjax-container" class="container">
            @include("_header")
            @yield('content')
            @include("_footer")
        </main>
        <nav class="navbar-audio">
            <audio id="audio" controls src=""></audio>
        </nav>
    </div>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.js"></script>
    <script src="{{ asset('js/template.js') }}"></script>
</body>
</html>