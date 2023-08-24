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
Route::get('/category-tajweed/delete/{id}', [\App\Http\Controllers\CategoryTajweedController::class,'delete'])->name('category.tajweed.delete');

Route::post('/tajweed/store', [\App\Http\Controllers\TajweedController::class,'store'])->name('tajweed.store');
Route::get('/tajweed/delete/{id}', [\App\Http\Controllers\TajweedController::class,'delete'])->name('tajweed.delete');

Route::get('/api/tajweeds',[\App\Http\Controllers\api\TajweedController::class,'getAllTajweed'])->name('get.all.tajweed');
Route::get('/api/tajweed/{id}',[\App\Http\Controllers\api\TajweedController::class,'getTajwedById'])->name('get.tajweed.by.id');
