<?php

use Illuminate\Support\Facades\Auth;
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
    ],  static function () {

    /** TODO for return to login & register page */
    Auth::routes();

    Route::get('/',  static function () {
        return redirect()->route('ecommerce.login');
    });


    Route::group(['prefix' => 'ecommerce/', 'as' => 'ecommerce.'], static function () {


        /** route for login */

        Route::get('/login',  static function () {
            return view('auth.login');
        })->name('login');

        /** route for register*/
        Route::get('register', [Ecommerce_controller::class, 'register'])->name('register');

        Route::get('dashboard/index', [Ecommerce_controller::class, 'index_admin'])->name('index_admin');

        Route::get('home_page', [Ecommerce_controller::class, 'index_user'])->name('index_user');


        Route::get('index', [Ecommerce_controller::class, 'index'])->name('index');

//        Route::get('/profile', [Ecommerce_controller::class, 'profile'])->name('profile');


    });

});




/** route for login & register direct */

//Route::get('/login', [Ecommerce_controller::class, 'login'])->name('login');
