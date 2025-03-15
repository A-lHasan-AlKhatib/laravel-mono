<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdUserController;
use App\Http\Controllers\SessionCntroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);

Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterdUserController::class, 'create']);
    Route::post('/register', [RegisterdUserController::class, 'store']);

    Route::get('/login', [SessionCntroller::class, 'create']);
    Route::post('/login', [SessionCntroller::class, 'store']);
});

Route::delete('/login', [SessionCntroller::class, 'destroy'])->middleware('auth');


