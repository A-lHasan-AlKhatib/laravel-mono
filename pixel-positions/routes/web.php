<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterdUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionCntroller;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JobController::class, 'index']);


Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');

Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware('guest')->group(function () {

    Route::get('/register', [RegisterdUserController::class, 'create']);
    Route::post('/register', [RegisterdUserController::class, 'store']);

    Route::get('/login', [SessionCntroller::class, 'create'])->name('login');
    Route::post('/login', [SessionCntroller::class, 'store']);
});

Route::delete('/login', [SessionCntroller::class, 'destroy'])->middleware('auth')->name('logout');
