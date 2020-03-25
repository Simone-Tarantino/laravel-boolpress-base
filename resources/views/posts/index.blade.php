@extends('layouts.layout')
@section('main')
<h1>Tutti i posts</h1>
    @foreach ($posts as $post)
    <div class="single-post">
        <ul>
            <li>
                <h2>{{$post->title}}</h2>
            </li>
            <li>
                <h3>{{$post->author}}</h3>
            </li>
            <li>
                <h4>{{$post->localization}}</h4>
            </li>
            <li>
                <h5>Creato il: {{$post->created_at}}</h5>
            </li>
            <li>
                <div class="content">
                    <p>{{$post->content}}</p>
                </div>
            </li>
        </ul>
    </div>
    <hr>
    @endforeach
@endsection