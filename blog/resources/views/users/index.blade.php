@extends('layouts.main')
@section('content')
    <h1>Blog Archive</h1>
    
    @foreach ($users as $user)
        <div class="user">
            <h2>{{ $user->name }}</h2>
            <h2>{{ $user->email }}</h2>
            <img src="{{ $user->info['avatar']}}" alt="ei">
            <h5>{{$user->info['address']}}</h5>
            <h5>{{$user->info['phone']}}</h5>
            

            <h3>POSTS</h3>
            <ul>
                @foreach($user->posts as $post)
                    <li>
                        <h4>{{ $post->title}}</h4>
                        <h4>{{ $post->body}}</h4>
                    </li>
                @endforeach
            </ul>
        </div>
        @if(! $loop->last)
            <hr>
        @endif
    @endforeach
@endsection