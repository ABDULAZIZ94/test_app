<?php

use App\Http\Controllers\Controller1;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/home',[HomeController::class,'index']);

Route::view('/view1','view1')->name('view.view1');

Route::get('/view2',[Controller1::class,'index']);

