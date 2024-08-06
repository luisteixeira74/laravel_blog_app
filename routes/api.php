<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Get a API Token
Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});

//Post Routes
Route::get('/post', [PostController::class, 'list'])->middleware('auth:sanctum');
Route::get('/post/{id}', [PostController::class, 'show'])->whereNumber('id');
Route::post('/post', [PostController::class, 'store']);
Route::put('/post', [PostController::class, 'edit']);

//Comment Routes
Route::get('/comment', [CommentController::class, 'list'])->middleware('auth:sanctum');
Route::get('/comment/{id}', [CommentController::class, 'show'])->whereNumber('id');
Route::post('/comment', [CommentController::class, 'store']);
Route::put('/comment', [CommentController::class, 'edit']);


