@extends('layouts.app')

@section('content')
    <h1>Recherche</h1>
    <h2>Utilisateurs</h2>
    <ul>
        @foreach($utilisateurs as $u)
            <li> <a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a></li>
        @endforeach
    </ul>
    <h3>Chansons</h3>
    @include("_chansons", ['chansons'=>$chansons])
@endsection