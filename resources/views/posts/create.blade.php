@extends('layouts.layout')
@section('main')
    <div class="new-post">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            @method('POST')
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo">
            <input type="text" name="author" id="author" placeholder="Inserisci l'autore">
            <input type="text" name="localization" id="localization" placeholder="Inserisci il luogo">
            <textarea name="content" id="content" cols="40" rows="15" placeholder="Inserisci il contenuto"></textarea>
            <button type="submit">Crea</button>
        </form>
    </div>
@endsection