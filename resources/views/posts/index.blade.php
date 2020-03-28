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
            <li>
                <a href="{{route('posts.show', $post)}}'"><button>Mostra post</button></a>
            </li>
            <li>
                <a href="{{route('posts.edit', $post)}}"><button>Modifica post</button></a>
            </li>
            <li>
                <form action="{{route('posts.destroy', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Elimina post</button>
                </form>
            </li>
        </ul>
    </div>
    <hr>
    @endforeach
@endsection