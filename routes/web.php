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
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required', 'numeric']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
Route::get('/jobs/{id}', function ($id){
    $job = Job::find($id);
    return view('job.show', ['job' => $job]);
});

