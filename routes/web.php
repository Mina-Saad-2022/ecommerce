<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Ecommerce_controller ;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], static function () {


    Route::get('/', static function () {
        return view('index')->name('index');
    });
    Route::group(['prefix' => 'ecommerce', 'as' => 'ecommerce.'], function () {

        Route::get('/index', [Ecommerce_controller::class, 'index'])->name('index');

    });

    Route::get('/', [Ecommerce_controller::class, 'home'])->name('index');

});
