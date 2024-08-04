@extends('layout')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required>{{ $post->content }}</textarea>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" value="{{ $post->author }}" required>

        <button type="submit">Update</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to All Posts</a>
@endsection
