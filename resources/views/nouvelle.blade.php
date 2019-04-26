@extends('layouts.app')

@section('content')
    <h1>Nouvelle</h1>
    <form action="/creer" method="post" enctype="multipart/form-data">
        <input type="text" name="nom" required placeholder="Nom de la chanson">
        <br>
        <input type="text" name="style" required placeholder="Style de la chanson">
        <br>
        <input type="file" name="chanson" required>
        <br>
        {{csrf_field()}}
        <input type="submit">
    </form>
@endsection