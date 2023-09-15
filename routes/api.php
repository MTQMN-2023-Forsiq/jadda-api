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

Route::get('/tajweeds',[\App\Http\Controllers\API\TajweedController::class,'getAllTajweed'])->name('get.all.tajweed');
Route::get('/tajweed/{id}',[\App\Http\Controllers\API\TajweedController::class,'getTajwedById'])->name('get.tajweed.by.id');

Route::get('/tafsirs',[\App\Http\Controllers\API\TafsirController::class,'getAllTafsir'])->name('get.all.tafsir');

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/user', [\App\Http\Controllers\API\UserController::class,'index'])->name('user.detail');

    Route::post('/point', [\App\Http\Controllers\API\PointController::class, 'store'])->name('point.store');
    Route::get('/leaderboard', [\App\Http\Controllers\API\PointController::class, 'leaderboard'])->name('point.leaderboard');

    Route::get('/videos', [\App\Http\Controllers\API\ShortController::class,'getAllVideos'])->name('get.all.video');

    Route::get('/surah', [\App\Http\Controllers\API\QuranController::class,'getAllSurah'])->name('get.all.surah');
    Route::get('/surah/{id}', [\App\Http\Controllers\API\QuranController::class,'getSurahById'])->name('get.surah.by.id');
});
