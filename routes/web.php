<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HandleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\TahunPelajaranController;
use App\Http\Controllers\WaliKelasController;
use Illuminate\Support\Facades\Auth;

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
})->name('home');

// Route::get('/home',[Gurucontroller::class, 'index'])->name('home');
// Route::get('/admin',[Gurucontroller::class, 'create'])->name('admin');
// Route::post('/simpan',[Gurucontroller::class, 'store'])->name('simpan');

Route::resource('guru', GuruController::class);
Route::resource('mapel', MapelController::class);
Route::resource('siswa', SiswaController::class);
// Route::resource('siswa', HomeController::class);
Route::resource('kelas', KelasController::class);
Route::resource('penilaian', PenilaianController::class);
Route::resource('raport', RaportController::class);
Route::resource('semester', SemesterController::class);
Route::resource('tahunpelajaran', TahunPelajaranController::class);
Route::resource('walikelas', WaliKelasController::class);
// Route::get('/guru.index',[GuruController::class, "index"]);
Route::get('/login', function() {
    return view('login');
})->name('login');

// Route::group(['middleware' => ['auth:admin, siswa, guru']],  function(){
//     Route::resource('siswa', HomeController::class);
// });

// Route::resource('login', LoginController::class);

// Auth::routes();

// Route::get('/admin',[HandleController::class,'showAdminLoginForm'])->name('admin.login-view');
// Route::post('/admin',[HandleController::class,'adminLogin'])->name('admin.submit');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/admin/dashboard',function(){
//     return view('admin');
// })->middleware('auth:admin');

Route::get('/about', function(){
    return view('about');
});

Route::get('/nyoba', function(){
    return view('nyoba');
});
// Route::get('/profilA', function(){
//     return view('profilA');
// });
// Route::get('/profilB', function(){
//     return view('profilB');
// });
// Route::get('/profilC', function(){
//     return view('profilC');
// });
// Route::get('/register', function(){
//     return view('register');
// });


// Route::get('/kelas', [AdminController::class, 'index'])->name('kelas');

// Route::post('/postLogin', ['LoginController@postLogin'])->name('postLogin');

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

// ALL ADMIN ROUTES
// Route::middleware(['auth','user-access:admin'])->group(function (){
//     Route::get('/siswa',[AdminController::class, "index"])->name('siswa');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
