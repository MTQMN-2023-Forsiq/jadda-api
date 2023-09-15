<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/category-tajweed/store', [\App\Http\Controllers\CategoryTajweedController::class,'store'])->name('category.tajweed.store');
//Route::get('/category-tajweed/delete/{id}', [\App\Http\Controllers\CategoryTajweedController::class,'delete'])->name('category.tajweed.delete');

Route::post('/tajweed/store', [\App\Http\Controllers\TajweedController::class,'store'])->name('tajweed.store');
//Route::get('/tajweed/delete/{id}', [\App\Http\Controllers\TajweedController::class,'delete'])->name('tajweed.delete');

Route::post('/tafsir/store', [\App\Http\Controllers\TafsirController::class,'store'])->name('tafsir.store');
Route::get('/tafsir/delete/{id}', [\App\Http\Controllers\TafsirController::class,'delete'])->name('tafsir.delete');

Route::post('/video/store', [\App\Http\Controllers\ShortController::class, 'store'])->name('video.store');
Route::get('/video/delete/{id}', [\App\Http\Controllers\ShortController::class, 'delete'])->name('video.delete');
