<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/job', [JobController::class, 'index']);

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::get('/blog/{id}', [PostController::class, 'show']);

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::get('/comments/{id}', [CommentController::class, 'show']);




