<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


Route::get('/', function () {
   $posts = Post::all();
    return view('home', [
        'posts' => $posts
    ]);
});


Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);