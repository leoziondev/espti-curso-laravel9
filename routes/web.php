<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
};
use App\Http\Controllers\Admin\CommentController;

Route::middleware(['auth'])->group(function () {
    Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/users/{userId}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
