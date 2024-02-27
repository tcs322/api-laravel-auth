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
Route::post('/users', [App\Http\Controllers\Api\UserController::class, 'store']);

Route::get('/', function () {
    return response()->json([
        'success' => true
    ]);
});
