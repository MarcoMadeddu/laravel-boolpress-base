@extends('layouts.main')
@section('content')
    <h1>Create new post</h1>

    @if($errors->any())
        <ul>
            @foreach ($errors as $error)
                <li>{{$error}}}</li>
            @endforeach
        </ul>

    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Title</label>
            <input class ="form-control" type="text" value ="{{ old('title') }}" name="title" id="title">
        </div>

        <div class="form-group">
            <label for="Body">Body</label>
            <textarea name="body" id="body" cols="30" rows="10">
                {{old('body')}}
            </textarea>
        </div>

        @foreach ($tags as $tag)
            <div class="form-check">
                <input type="checkbox" name="tags[]" id="tag-{{ $loop->iteration }}" value="{{ $tag->id }}">
                <label for="tag-{{ $loop->iteration }}"> {{ $tag->name }}</label>
            </div>
        @endforeach

        <input type="submit" value="Create post">
        
    </form>
    
@endsection