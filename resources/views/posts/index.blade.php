@extends('layouts.app')

@section('content')

@include('partials.messages')

<h2 class="text-center my-4">All Posts</h2>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
@if (count($posts) > 0)
    @foreach ($posts as $post)
       <article class="card mb-3">
        <div class="card-body">
            <h4>{{ $post->title }}</h4>
            <a href="{{ route('categories.posts', ['category_id' => $post->category->id]) }}">
                <h6>{{ $post->category->name }}</h6>
            </a>
            <p>{{ Str::limit($post->body, 200, '...') }}</p>
            <a href="{{ route('posts.show', $post->id) }}">See Full Post</a>
        </div>
        </article> 
    @endforeach
@else
    <p>There are no posts. Add your first post.</p>
@endif

@endsection