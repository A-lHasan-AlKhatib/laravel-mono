<?php

namespace App\Providers;

use App\Models\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::bind('comment', function ($value) {
            $comment = Comment::query()->find($value);
            if (!$comment) {
                abort(404, 'Comment not found');
            }
            return $comment;
        });
    }
}
