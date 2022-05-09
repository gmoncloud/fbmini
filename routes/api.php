<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\UserAuthsController;
use \App\Http\Controllers\EmployeeController;
use \App\Http\Controllers\UserPostController;
use \App\Http\Controllers\CommentController;
use \App\Http\Controllers\ProfileController;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/register', [UserAuthsController::class, 'register']);
Route::post('/login', [UserAuthsController::class, 'login']);

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::apiResource('user_posts', UserPostController::class);
    Route::apiResource('comments', CommentController::class);
    Route::apiResource('employees', EmployeeController::class);
    Route::apiResource('profiles', ProfileController::class);
});
