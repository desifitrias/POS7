<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Body Care'],
            ['name' => 'Keperluan Ibu dan Anak'],
            ['name' => 'Makanan Dan Minuman'],
            ['name' => 'Kebutuhan Pokok'],
            ['name' => 'Lainnya']
            // Tambahkan lebih banyak kategori sesuai kebutuhan
        ]);
    }
}
