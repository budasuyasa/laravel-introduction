<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    function tampilBuku(){
        $buku = Buku::select('id', 'judul', 'stok', 'penulis')->get();

        return view('buku', [
            'buku' => $buku
        ]);
    }
}
