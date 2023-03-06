<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\API\PostsController;
use App\Http\Controllers\UserPostController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::get('/posts', [PostsController::class, 'index']);
// Route::get('/posts/{id}', [PostsController::class, 'show']);

Route::resource('posts', PostsController::class);
Route::resource('users', UserController::class)->only('index');

// Route::get('/users/{id}/posts', [UserPostController::class, 'index']);

Route::resource('users.posts', UserPostController::class)->only('index');