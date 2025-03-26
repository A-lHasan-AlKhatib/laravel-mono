<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function addPost(PostRequest $request): JsonResponse
    {
        $post = Post::query()->create([
            'title' => $request->title,
            'content' => $request['content'],
            'user_id' => auth()->user()->id,
        ]);

        return response()->json([
            'post_id' => $post->id,
            'message' => 'Post created successfully',
        ], 201);
    }

    public function editPost(PostRequest $request, Post $post): JsonResponse
    {
        if ($post->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $post->update([
            'title' => $request['title'],
            'content' => $request['content'],
        ]);
        return response()->json(['message' => 'Post updated successfully']);
    }

    public function getAllPosts(): JsonResponse
    {
        $posts = Post::all();
        return response()->json([
            'posts' => $posts
        ]);
    }

    public function getPost(Post $post): JsonResponse
    {
        return response()->json(['post' => $post]);
    }

    public function deletePost(Post $post): JsonResponse
    {
        if ($post->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $post->delete();
        return response()->json(['message' => 'Post deleted successfully']);
    }

}
