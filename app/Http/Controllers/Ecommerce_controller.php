<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ecommerce_controller extends Controller
{
    public function home()
    {
        return redirect(route('ecommerce.index'));
    }
    public function index(){
        return view('index');
    }
}
