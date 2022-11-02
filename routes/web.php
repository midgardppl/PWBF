<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;

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

// Route::get('/home',[Gurucontroller::class, 'index'])->name('home');
// Route::get('/admin',[Gurucontroller::class, 'create'])->name('admin');
// Route::post('/simpan',[Gurucontroller::class, 'store'])->name('simpan');

Route::resource('guru', GuruController::class);
Route::resource('mapel', MapelController::class);
Route::resource('siswa', SiswaController::class);
// Route::get('/guru.index',[GuruController::class, "index"]);
// Route::get('/guru.add',[GuruController::class, "create"]);





Route::get('/about', function(){
    return view('about');
});

Route::get('/profilA', function(){
    return view('profilA');
});
Route::get('/profilB', function(){
    return view('profilB');
});
Route::get('/profilC', function(){
    return view('profilC');
});
// Route::get('/register', function(){
//     return view('register');
// });

Route::get('/login', function(){
    return view('login');
});

// Route::get('/guru', function(){
//     return view('guru');
// });

// Route::post('prosestambah','Crudcontroller@tambahdata');


// PENTING!!
// Route::get('read',function (){
//     return view('read');
// });

// Route::get('/siswa',function (){
//     return view('siswa');
// });

Route::get('/kelasA',function (){
    return view('kelasA');
});
Route::get('/kelasB',function (){
    return view('kelasB');
});
Route::get('/kelasC',function (){
    return view('kelasC');
});
