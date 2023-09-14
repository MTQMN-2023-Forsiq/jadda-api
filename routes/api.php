<?php

use Illuminate\Http\Request;
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

Route::post('/login', [\App\Http\Controllers\API\AuthController::class, 'login'])->name('user.login');
Route::post('/register', [\App\Http\Controllers\API\AuthController::class, 'register'])->name('user.register');

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/user', [\App\Http\Controllers\API\UserController::class,'index'])->name('user.detail');

    Route::post('/point', [\App\Http\Controllers\API\PointController::class, 'store'])->name('point.store');
    Route::get('/leaderboard', [\App\Http\Controllers\API\PointController::class, 'leaderboard'])->name('point.leaderboard');
});
