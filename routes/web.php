<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return [
        'success' => true,
        'message' => 'Server is on.'
    ];
});

// Post
Route::get('/api/posts', [PostController::class, 'index']);
Route::get('/api/posts/{id}', [PostController::class, 'show']);
Route::get('/api/posts/edit/{id}', [PostController::class, 'edit']);
Route::get('/api/posts/filter/{data}', [PostController::class, 'search']);

Route::post('/api/posts/create', [PostController::class, 'store'])->middleware('token');
Route::put('/api/posts/update/{id}', [PostController::class, 'update']);
Route::delete('/api/posts/delete/{id}', [PostController::class, 'destroy']);

// User 
Route::get('/api/users', [UserController::class, 'index']);
Route::get('/api/users/{id}', [UserController::class, 'show']);
Route::post('/api/users', [UserController::class, 'store']);
Route::put('/api/users/{id}', [UserController::class, 'update']);
Route::delete('/api/users/{id}', [UserController::class, 'destroy']);

