@extends('layouts.app')

@section('content')

<h2 class="text-center my-4">Single Post</h2>
<article>
    <h4>{{ $post->title }}</h4>
    <h6>{{ $post->category->name }}</h6>
    <p>{{ $post->body }}</p>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit Post</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Post</button>
    </form>
</article>

@endsection