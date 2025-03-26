<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Blog
    Route::post('/post', [PostController::class, 'addPost']);
    Route::put('/post/{post}', [PostController::class, 'editPost']);
    Route::delete('/post/{post}', [PostController::class, 'deletePost']);
});

Route::get('/post', [PostController::class, 'getAllPosts']);
Route::get('/post/{post}', [PostController::class, 'getPost']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
