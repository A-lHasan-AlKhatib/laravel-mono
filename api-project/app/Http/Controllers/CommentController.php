<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
    public function addComment(CommentRequest $request): JsonResponse
    {
        $comment = Comment::query()->create([
            'post_id' => $request->get('post_id'),
            'comment' => $request->get('comment'),
            'user_id' => auth()->user()->id,
        ]);

        return response()->json([
            'comment_id' => $comment->id,
            'message' => 'Comment created successfully',
        ], 201);
    }

    public function editComment(CommentRequest $request, Comment $comment): JsonResponse
    {
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $comment->update([
            'comment' => $request['comment'],
        ]);
        return response()->json(['message' => 'Comment updated successfully']);
    }

    public function getAllComments(): JsonResponse
    {
        $comments = Comment::all();
        return response()->json([
            'comments' => $comments
        ]);
    }

    public function getComment(Comment $comment): JsonResponse
    {
        return response()->json(['comment' => $comment]);
    }

    public function deleteComment(Comment $comment): JsonResponse
    {
        if ($comment->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $comment->delete();
        return response()->json(['message' => 'Comment deleted successfully']);
    }
}
