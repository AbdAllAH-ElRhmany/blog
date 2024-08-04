<?php

namespace App\Http\Services;

use App\Models\Post;

class PostService
{
    public function getAllPosts()
    {
        return Post::all();
    }

    public function getPostById($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost(array $data)
    {
        return Post::create($data);
    }

    public function updatePost($id, array $data)
    {
        $post = Post::findOrFail($id);
        $post->update($data);
        return $post;
    }

    public function deletePost($id)
    {
        Post::destroy($id);
    }
}
