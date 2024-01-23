<?php

use App\Http\Controllers\BukuController;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;
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

// Obejct relational mapping
// Iluminate

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return '<h1>kontak@gmail.com</h1>';
});

// Route::get('/buku', function(){
    // $buku = Buku::select('id', 'judul', 'stok', 'penulis')->get();

    // return view('buku', [
    //     'buku' => $buku
    // ]);
// });

Route::get('/buku', [BukuController::class, 'tampilBuku']);
