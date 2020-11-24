<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/{post}', [\App\Http\Controllers\HomeController::class, 'post'])->where('post', '[0-9]+');

Route::middleware(['auth'])->group(function() {
/*    Route::get('/home', function() {
        return view('home');
    })->name('home');*/

    Route::get('/user/profile', function() {
        return view('profile');
    })->name('profile');

    Route::resource('posts', \App\Http\Controllers\PostController::class);
    //Route::resource('comments', \App\Http\Controllers\CommentController::class)->only(['store']);

    Route::post('/{post}/comment', [\App\Http\Controllers\CommentController::class, 'store'])->where('post', '[0-9]+')->name('comments.store');
});
