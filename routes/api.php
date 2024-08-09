<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

Route::prefix('auth')->group(function() {
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::post('/register', [RegisterController::class, 'register']);
});

//Post Routes
Route::get('/post', [PostController::class, 'list'])->middleware('auth:sanctum');
Route::get('/post/{id}', [PostController::class, 'show'])->whereNumber('id')->middleware('auth:sanctum');
Route::post('/post', [PostController::class, 'store'])->middleware('auth:sanctum');
Route::put('/post', [PostController::class, 'edit'])->middleware('auth:sanctum');

//Comment Routes
Route::get('/comment', [CommentController::class, 'list'])->middleware('auth:sanctum');
Route::get('/comment/{id}', [CommentController::class, 'show'])->whereNumber('id')->middleware('auth:sanctum');
Route::post('/comment', [CommentController::class, 'store'])->middleware('auth:sanctum');
Route::put('/comment', [CommentController::class, 'edit'])->middleware('auth:sanctum');