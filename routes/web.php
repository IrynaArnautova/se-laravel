<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/comparative-characteristics', [PageController::class, 'comparison'])->name('comparison');
    Route::get('/evosound', [PageController::class, 'evosound'])->name('evosound');
    Route::get('/evosound-bar', [PageController::class, 'bar'])->name('bar');
    Route::get('/evosound-bar/specification-and-grades-evosound-bar', [PageController::class, 'bar_specification'])->name('bar_specification');
    Route::get('/evosound-sphere', [PageController::class, 'sphere'])->name('sphere');
    Route::get('/komplekty-dlya-karaoke', [PageController::class, 'karaoke_sets'])->name('karaoke_sets');
    Route::get('/karaoke-komplekty-s-mikrofonami', [PageController::class, 'karaoke_set_mic'])->name('karaoke_set_mic');
    Route::get('/karaoke-komplekty-s-saundbarom', [PageController::class, 'karaoke_set_evosound'])->name('karaoke_set_evosound');
    Route::get('/karaoke-komplekt-so-stereosistemoj', [PageController::class, 'karaoke_set_acoustic'])->name('karaoke_set_acoustic');
});




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
