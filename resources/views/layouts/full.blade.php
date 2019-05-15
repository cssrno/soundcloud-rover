<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="{{ asset('css/template.css') }}" rel="stylesheet">
    </head>
    <body>

        @guest
        @else
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest

        @if (\Request::is('login')  ||  \Request::is('register') || \Request::is('password/reset')  )
            @include("_authheader")
        @else
            @include("_header")
        @endif
        <div id="pjax-container">
        @yield('content')
        </div>

        @if (\Request::is('login')  ||  \Request::is('register') || \Request::is('password/reset')  )
            @include("_authfooter")
        @else
            @include("_footer")
            <div class="navbar-audio">
                <audio id="audio" controls src=""></audio>
            </div>
        @endif

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/jquery.pjax.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
    </body>
</html>