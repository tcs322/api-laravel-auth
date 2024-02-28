<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/users', [App\Http\Controllers\Api\UserController::class, 'index']);
Route::get('/users/{id}', [App\Http\Controllers\Api\UserController::class, 'show']);
Route::post('/users', [App\Http\Controllers\Api\UserController::class, 'store']);
Route::put('users/{id}', [App\Http\Controllers\Api\UserController::class, 'update']);
Route::delete('users/{id}', [App\Http\Controllers\Api\UserController::class, 'destroy']);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
