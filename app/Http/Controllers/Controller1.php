<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    //
    public function index(){
        return view('view2');
    }

    public function index2()
    {
        return view('view2');
    }

    public function internal(){
        return view('internal.index');
    }
}
