<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/biodataA', function(){
    return view('BiodataA');
});
// Route::get('/register', function(){
//     return view('register');
// });

Route::get('/login', function(){
    return view('login');
});

Route::get('/guru', function(){
    return view('guru');
});

Route::post('prosestambah','Crudcontroller@tambahdata');

Route::get('read',function (){
    return view('read');
});

Route::get('/siswa',function (){
    return view('siswa');
});

Route::get('/kelasA',function (){
    return view('kelasA');
});
Route::get('/kelasB',function (){
    return view('kelasB');
});
Route::get('/kelasC',function (){
    return view('kelasC');
});