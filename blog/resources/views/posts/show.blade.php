@extends('layouts.main')
@section('content')
    <h1>{{ $post->title }}</h1>
    <a href="{{route('posts.edit' , $post->id) }}">Edit Post</a>
    <form action="{{ route('posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Delete">

    </form>
    <p>{{ $post->body }}</p>

    <section>
        <h4>tags</h4>
        @forelse ($post->tags as $tag)
            <span>{{$tag->name}} </span>
        @empty
            <span>NO TAGS</span>
        @endforelse
    </section>
@endsection