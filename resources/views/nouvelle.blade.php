@extends('layouts.app')

@section('content')
    <h1>Nouvelle</h1>
    @include('_error')
    <form action="/creer" data-pjax method="post" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Nom de la chanson" value="{{old('nom')}}">
        <br>
        <input type="text" name="style" required placeholder="Style de la chanson" value="{{old('style')}}" >
        <br>
        <input type="file" name="chanson" required>
        <br>
        {{csrf_field()}}
        <input type="submit">
    </form>
@endsection