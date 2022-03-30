<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Products

Route::get('/product', [ProductController::class, 'show']);
Route::post('/products', [ProductController::class, 'create']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'delete']);

// User

Route::get('/user', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'create']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'delete']);

// Task

Route::get('/task', [TaskController::class, 'show']);
Route::post('/tasks', [TaskController::class, 'create']);
Route::put('/task/{id}', [TaskController::class, 'update']);
Route::delete('/task/{id}', [TaskController::class, 'delete']);

//Post

Route::get('/posts', [PostController::class, 'findAll']);
Route::get('/post/{id}', [PostController::class, 'findOne']);
Route::post('/post', [PostController::class, 'create']);
Route::put('/post/{id}', [PostController::class, 'updateOne']);
Route::delete('/post/{id}', [PostController::class, 'delete']);
Route::delete('/posts', [PostController::class, 'deleteAll']);

//Comment

Route::get('/comments', [CommentController::class, 'findAll']);
Route::get('/comment/{id}', [CommentController::class, 'findOne']);
Route::post('/comment', [CommentController::class, 'create']);
Route::put('/comment/{id}', [CommentController::class, 'updateOne']);
Route::delete('/comment/{id}', [CommentController::class, 'delete']);
Route::delete('/comments', [CommentController::class, 'deleteAll']);