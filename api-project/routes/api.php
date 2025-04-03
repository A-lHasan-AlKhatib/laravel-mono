<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Post
    Route::post('/post', [PostController::class, 'addPost']);
    Route::put('/post/{post}', [PostController::class, 'editPost']);
    Route::delete('/post/{post}', [PostController::class, 'deletePost']);

    // Comment
    Route::post('/comment', [CommentController::class, 'addComment']);
    Route::put('/comment/{comment}', [CommentController::class, 'editComment']);
    Route::delete('/comment/{comment}', [CommentController::class, 'deleteComment']);


    // Like
    Route::post('/like', [LikeController::class, 'addLike']);
    Route::put('/like/{like}', [LikeController::class, 'editLike']);
    Route::delete('/like/{like}', [LikeController::class, 'deleteLike']);
});

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Post
Route::get('/post', [PostController::class, 'getAllPosts']);
Route::get('/post/{post}', [PostController::class, 'getPost']);

// Comment
Route::get('/comment', [CommentController::class, 'getAllComments']);
Route::get('/comment/{comment}', [CommentController::class, 'getComment']);

// Like
Route::get('/like', [LikeController::class, 'getAllLikes']);
Route::get('/like/{like}', [LikeController::class, 'getLike']);
