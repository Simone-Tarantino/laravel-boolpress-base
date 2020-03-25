@extends('layouts.layout')
@section('main')
    <div class="edit-post">
        <form action="{{route('posts.update', $post)}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="title" id="title" placeholder="Inserisci il titolo" value="{{$post->title}}">
            <input type="text" name="author" id="author" placeholder="Inserisci l'autore" value="{{$post->author}}">
            <input type="text" name="localization" id="localization" placeholder="Inserisci il luogo" value="{{$post->localization}}">
            <textarea name="content" id="content" cols="40" rows="15" placeholder="Inserisci il contenuto">{{$post->content}}</textarea>
            <button type="submit">Modifica</button>
        </form>
    </div>
@endsection