@extends('layouts.app')

@section('content')
    <h1>Utilisateur</h1>
    {{$utilisateur->name}}

    @auth
        @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
            @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle >Arreter de suivre</a>
            @else
                <a href="/suivi/{{$utilisateur->id}}" data-pjax-toggle>Suivre</a>
            @endif
        @endif
    @endauth
    <br>
    Il suit {{$utilisateur->jeLesSuit->count()}} personne(s)
    <br>
    Il est suivi par  {{$utilisateur->ilsMeSuivent->count()}} personne(s)
    <br>
    @include("_chansons", ["chansons" => $utilisateur->chansons])

@endsection