@extends('layouts.main')
@section('content')
   @foreach ($posts as $post)
    <article>
        <h2>{{$post->title}}</h2>
        <h4>AUTHOR: {{$post->user->name}}</h4>
        <h2>Created: {{$post->created_at}}</h2>
        <p>{{$post->body}}</p>
    </article>
    @if(!$loop->last)
        <hr>
    @endif
   @endforeach

   <h4>Navigation</h4>
   {{$posts->links()}}
@endsection