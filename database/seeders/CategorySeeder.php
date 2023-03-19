<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('category')->insert([
            ['kode' => 'SOF', 'name' => 'Kendala Software'],
            ['kode' => 'HAR', 'name' => 'Kendala Hardware'],
            ['kode' => 'NET', 'name' => 'Kendala Network'],
            ['kode' => 'OTH', 'name' => 'Kendala Lainnya'],
            // tambahkan data lainnya di sini jika perlu
        ]);
    }
}
