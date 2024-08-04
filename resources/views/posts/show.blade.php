@extends('layout')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Author: {{ $post->author }}</p>
    <p>Created At: {{ $post->created_at }}</p>
    <a href="{{ route('posts.index') }}">Back to All Posts</a>
    <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
