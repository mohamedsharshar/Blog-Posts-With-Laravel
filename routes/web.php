<?php

use App\Http\Controllers\PostControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', [PostControllers::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostControllers::class, 'create'])->name('posts.create');
Route::post('/posts', [PostControllers::class, 'store'])->name('posts.store');
Route::resource('comments', CommentController::class)->only(['create', 'store']);
Route::get('/posts/{post}', [PostControllers::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostControllers::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostControllers::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostControllers::class, 'destroy'])->name('posts.destroy');
