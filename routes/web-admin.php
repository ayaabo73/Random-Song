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
    Route::get('/song', 'index')->name('song.index');
    Route::post('/song/create', 'store')->name('song.store');
    Route::get('/song/{song}/edit','edit')->name('song.edit');
    Route::patch('/song/{song}','update')->name('song.update');
    Route::delete('/song/{song}','destroy')->name('song.destroy');
});

Route::controller(SingersController::class)->group(function () {
    Route::get('/singer', 'index')->name('singer.index');
    Route::post('/singer/create', 'store')->name('singer.store');
    Route::get('/singer/{singer}/edit','edit')->name('singer.edit');
    Route::patch('/singer/{singer}','update')->name('singer.update');
    Route::delete('/singer/{singer}','destroy')->name('singer.destroy');
});
Route::controller(QuotesController::class)->group(function () {
    Route::get('/quote', 'index')->name('quote.index');
    Route::post('/quote/create', 'store')->name('quote.store');
    Route::get('/quote/{quote}/edit','edit')->name('quote.edit');
    Route::patch('/quote/{quote}','update')->name('quote.update');
    Route::delete('/quote/{quote}','destroy')->name('quote.destroy');
});
