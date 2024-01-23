<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBuku extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'judul' => 'Belajar Pemrograman Laravel',
            'stok' => 10,
            'penulis' => 'Agus',
        ]);

        DB::table('bukus')->insert([
            'judul' => 'Belajar Javascript',
            'stok' => 20,
            'penulis' => 'Ani',
        ]);
    }
}
