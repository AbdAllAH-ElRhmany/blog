@extends('layout')

@section('content')
    <h1>Create New Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <label for="author">Author:</label>
        <input type="text" id="author" name="author" required>

        <button type="submit">Create</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to All Posts</a>
@endsection
