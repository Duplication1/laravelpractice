<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
   $posts = Post::all();
    return view('home', [
        'posts' => $posts
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->cursorPaginate(3);
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

