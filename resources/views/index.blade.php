@extends('layouts.app')

@section('content')

    @auth
        <a href="/nouvelle" data-pjax>Insérer une musique</a><br><br>
    @endauth

    <section class="container-list">
        <h3>Écoutez gratuitement les dernières tendances de la communauté SoundCloud</h3>
        @include("_chansons", ["chansons" => $chansons])
    </section>

    {{--<a href="#" id="testajax">Testons l'jax</a>
    <div id="aremplir"></div>--}}

@endsection