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
    Route::get('/edit/song/{id}','edit')->name('song.edit');
    Route::post('/update/song/{id}','update')->name('song.update');
    Route::get('/delet/song/{id}','destroy')->name('song.destroy');
});

Route::controller(SingersController::class)->group(function () {
    Route::get('/singers', 'index')->name('singer.index');
    Route::get('/create/singer', 'store')->name('singer.store');
    Route::get('/edit/singer/{id}','edit')->name('singer.edit');
    Route::post('/update/singer/{id}','update')->name('singer.update');
    Route::get('/delet/singer/{id}','destroy')->name('singer.destroy');
});
Route::controller(QuotesController::class)->group(function () {
    Route::get('/quotes', 'index')->name('quote.index');
    Route::get('/create/quote', 'store')->name('quote.store');
    Route::get('/edit/quote/{id}','edit')->name('quote.edit');
    Route::post('/update/quote/{id}','update')->name('quote.update');
    Route::get('/delet/quote/{id}','destroy')->name('quote.destroy');
});
