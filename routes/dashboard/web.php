<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin_controller;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Setting_controller ;
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
//


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'check_admin']
    ],

    static function () {


        Route::group(['prefix' => 'dashboard/ecommerce', 'as' => 'dashboard.'], static function () {
            /** to open dashboard home page  */
            Route::get('/index', [Admin_controller::class, 'index_admin'])->name('index_admin');
            /** to open user profile page */
            Route::group(['prefix' => 'profile'], function () {
                Route::get('/{id}', [Admin_controller::class, 'profile'])->name('profile');
                Route::post('/{id}', [Admin_controller::class, 'action_edit'])->name('action_edit');

            });
            /** to open setting ecommerce page */
            Route::get('/setting', [Admin_controller::class, 'setting'])->name('setting');
            Route::put('/setting/{setting}', [Setting_controller::class, 'update'])->name('update');

        });

    });
