@extends('layouts.main')
@section('content')
    @foreach ($feedbacks as $feedback)
    <article>
        <h2>{{$feedback->title}}</h2>
 
        <p>{{$feedback->description}}</p>
    </article>
    @endforeach
@endsection