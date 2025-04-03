<?php

namespace App\Http\Controllers;

use App\Http\Requests\LikeRequest;
use App\Models\Like;
use Illuminate\Http\JsonResponse;

class LikeController extends Controller
{
    public function addLike(LikeRequest $request): JsonResponse
    {
        $like = Like::query()->create([
            'post_id' => $request->get('post_id'),
            'user_id' => auth()->user()->id,
        ]);

        return response()->json([
            'like_id' => $like->id,
            'message' => 'Like created successfully',
        ], 201);
    }

    public function editLike(LikeRequest $request, Like $like): JsonResponse
    {
        if ($like->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $like->update([
            'like' => $request['like'],
        ]);
        return response()->json(['message' => 'Like updated successfully']);
    }

    public function getAllLikes(): JsonResponse
    {
        $likes = Like::all();
        return response()->json([
            'likes' => $likes
        ]);
    }

    public function getLike(Like $like): JsonResponse
    {
        return response()->json(['like' => $like]);
    }

    public function deleteLike(Like $like): JsonResponse
    {
        if ($like->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $like->delete();
        return response()->json(['message' => 'Like deleted successfully']);
    }
}
