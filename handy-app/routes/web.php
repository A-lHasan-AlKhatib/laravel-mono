<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});


Route::get('/jobs/{id}', function ($id) {
    $job = Job::query()->find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 3 // Explicitly set employer_id
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});
