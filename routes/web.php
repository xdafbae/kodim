<?php

use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\Front\HomeController;
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
    return view('front.home.index');
});
Route::get('/artikel', function () {
    return view('front.article.show');
});


// Profil Front End
Route::get('/sejarah', function () {
    return view('front.profil.sejarah');
});

Route::get('/dandim', function () {
    return view('front.profil.dandim');
});

Route::get('/organisasi', function () {
    return view('front.profil.organisasi');
});
Route::get('/visi-misi', function () {
    return view('front.profil.visimisi');
});
Route::get('/peran-fungsi', function () {
    return view('front.profil.peran');
});

// Berita
Route::get('/berita-utama', function () {
    return view('front.berita.utama');
});
Route::get('/berita-jajaran', function () {
    return view('front.berita.jajaran');
});

//galeri
Route::get('/galeri', function () {
    return view('front.galeri.index');
});

//kontak
Route::get('/kontak', function () {
    return view('front.kontak.index');
});









// Route::get('/', [HomeController::class, 'index']);

// Route::get('/dashboard', [DashboardController::class, 'index']);
