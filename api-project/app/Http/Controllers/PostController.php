<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\JsonResponse;

class PostController extends Controller
{
    public function addPost(PostRequest $request): JsonResponse
    {
        try {
            $post = Post::create([
                'title' => $request->title,
                'content' => $request['content'],
                'user_id' => auth()->id(),
            ]);

            return response()->json([
                'post_id' => $post->id,
                'message' => 'Post created successfully',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to create post. message: ' . $e->getMessage(),
            ], 500);
        }
    }
}
