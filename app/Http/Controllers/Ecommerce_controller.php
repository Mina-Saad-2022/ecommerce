<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Foundation\Application;

class Ecommerce_controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /** to open login page */
    public function login()
    {
        return view('auth.login');
    }

    /** to return for login page */
    public function register()
    {
        return to_route('ecommerce.login');
    }



    /** to open home page ecommerce for user */
    public function index_user()
    {
//        return view('ecommerce.index');

        dd(Auth::user()->type);
    }


    public function index()
    {
        /** to redirect to dashboard for admin */
        if (Auth::user()->type === 'admin') {
            return to_route('dashboard.index_admin');
        } else {
            /**  to redirect to ecommerce for user  */
            return to_route('ecommerce.index_user');
        }


    }


}
