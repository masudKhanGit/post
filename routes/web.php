<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog.show');
Route::get('/read/{$id?}', [HomeController::class, 'readMore'])->name('post.read');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('dashboard');

    Route::prefix('/post')->group(function () {
        Route::controller(PostController::class)->group(function() {
            Route::get('/create', 'create')->name('post.create');
            Route::post('/store', 'store')->name('post.store');
            Route::get('/manage', 'index')->name('post.manage');
            Route::get('/edit/{id?}', 'edit')->name('post.edit');
            Route::post('/update/{id?}', 'update')->name('post.update');
            Route::get('/delete/{id?}', 'delete')->name('post.delete');
            Route::get('/status/{id?}', 'status')->name('post.status');
        });
    });

});
