@extends('layouts.app')

@section('content')

    <section class="container-list">
        <h3>Écoutez gratuitement les dernières tendances de la communauté SoundCloud</h3>
        @include("_chansons", ["chansons" => $chansons])
    </section>

    {{--<a href="#" id="testajax">Testons l'jax</a>
    <div id="aremplir"></div>--}}

@endsection