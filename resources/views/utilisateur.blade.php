@extends('layouts.app')
@section('content')
<div class="container-fluid mt--6">
    <div class="card card-profile shadow">
        <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0 pt-md-4">
            <div class="text-center">
                <h3>
                    {{$utilisateur->name}}
                </h3>

            </div>
            <div class="row">
                <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center">
                        <div>
                            <span class="heading">{{$utilisateur->jeLesSuit->count()}}</span>
                            <span class="description">Follows</span>
                        </div>
                        <div>
                            <span class="heading"> {{$utilisateur->ilsMeSuivent->count()}}</span>
                            <span class="description">Follower</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                @auth
                    @if($utilisateur->id != \Illuminate\Support\Facades\Auth::id())
                        @if(Auth::user()->jeLesSuit->contains($utilisateur->id))
                            <a href="/suivi/{{$utilisateur->id}}" class="btn btn-sm btn-default float-center" data-pjax-toggle >Arreter de suivre</a>
                        @else
                            <a href="/suivi/{{$utilisateur->id}}" class="btn btn-sm btn-default float-center" data-pjax-toggle>Suivre</a>
                        @endif
                    @endif
                @endauth
            </div>
            <div class="table-responsive pt-4">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Song</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @include("_chansons", ["chansons" => $utilisateur->chansons])
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection