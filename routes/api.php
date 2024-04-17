<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('user', [UserController::class, 'index']);
Route::get('user/raw/{id}', [UserController::class, 'raw']);
Route::get('user/p/{id}', [UserController::class, 'show']);
Route::get('user/{id}', [UserController::class, 'showWithoutParent']);
Route::get('post', [PostController::class, 'index']);
Route::get('post/p/{id}', [PostController::class, 'show']);
Route::get('post/{id}', [PostController::class, 'showWithoutParent']);