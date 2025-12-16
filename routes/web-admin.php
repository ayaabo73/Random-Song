<?php

use App\Http\Controllers\Admin\QuotesController;
use App\Http\Controllers\Admin\SingersController;
use App\Http\Controllers\Admin\SongsController;
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

Route::get('/admin', function () {

    return view('Admin.admin-welcome');
});

Route::controller(SongsController::class)->group(function () {
    Route::get('/songs', 'index')->name('song.index');
    Route::get('/create/song', 'store')->name('song.store');
    Route::get('/edit/song')->name('song.edit');
    Route::patch('/update/song/{id}')->name('song.update');
    Route::delete('/delet/song')->name('song.destroy');
});

Route::controller(SingersController::class)->group(function () {
    Route::get('/singers', 'index')->name('singer.index');
    Route::get('/create/singer', 'store')->name('singer.store');
    Route::get('/edit/singer')->name('singer.edit');
    Route::patch('/update/singer/{id}')->name('singer.update');
    Route::delete('/delet/singer/{id}')->name('singer.destroy');
});
Route::controller(QuotesController::class)->group(function () {
    Route::get('/quotes', 'index')->name('quote.index');
    Route::get('/create/quote', 'store')->name('quote.store');
    Route::get('/edit/quote')->name('quote.edit');
    Route::patch('/update/quote/{id}')->name('quote.update');
    Route::delete('/delet/quote/{id}')->name('quote.destroy');
});
