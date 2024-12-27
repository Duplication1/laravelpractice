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
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id){
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

