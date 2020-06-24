@extends('layouts.main')
@section('content')
   @foreach ($posts as $post)
    @if(session('post-deletd'))
        <span>{{session('post-deletd')}} Deleted</span>
    @endif

    <article>
        <h2>{{$post->title}}</h2>
        <h4>AUTHOR: {{$post->user->name}}</h4>
        <h2>Created: {{$post->created_at}}</h2>
        <p>{{$post->body}}</p>
        <a href="{{ route('posts.show' , $post->slug) }}">Read more</a>
    </article>
    @if(!$loop->last)
        <hr>
    @endif
   @endforeach

   <h4>Navigation</h4>
   {{$posts->links()}}
@endsection