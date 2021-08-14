<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/series/list', [\App\Http\Controllers\SeriesController::class, 'index'])->name('series');
Route::get('/serie/create', [\App\Http\Controllers\SeriesController::class, 'create'])->name('serie.create');
Route::post('/serie/create', [\App\Http\Controllers\SeriesController::class, 'store']);
Route::get('/serie/edit/{serie}', [\App\Http\Controllers\SeriesController::class, 'edit'])->name('serie.edit');
Route::post('/serie/edit/{serie}', [\App\Http\Controllers\SeriesController::class, 'update'])->name('serie.update');
Route::delete('/serie/delete/{id}', [\App\Http\Controllers\SeriesController::class, 'destroy'])->name('serie.delete');

