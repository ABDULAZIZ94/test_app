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

    public function viewlogin(){
        return view('auth.login');
    }

    public function processlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        dump($request->all());

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('/secured');
        // }
    }

}
