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


Route::get('/home', [\App\Http\Controllers\BookController::class, 'index'])->name('home');
Route::get('/publisher', [\App\Http\Controllers\PublisherController::class, 'index'])->name('publish');
Route::get('/detail.index/{id}', [\App\Http\Controllers\DetailController::class, 'index'])->name('detail.index');
Route::get('/detail.book/{id}', '\App\Http\Controllers\BookController@view')->name('detail.book');
Route::get('/category.index/{id}', '\App\Http\Controllers\CategoryController@view')->name('category.index');

Route::get('/contact', function () {
    return view('contact');
});
