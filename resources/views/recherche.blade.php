@extends('layouts.app')
@section('content')
<div class="container-fluid mt--7">
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Search</h3>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">User</th>
                </tr>
                </thead>
                <tbody>
                   @foreach($utilisateurs as $u)
                       <tr> <td> <a href="/utilisateur/{{$u->id}}" data-pjax>{{$u->name}}</a></td> </tr>
                   @endforeach
                </tbody>
           </table>
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Song</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @include("_chansons", ['chansons'=>$chansons])
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection