<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('kategoris')->insert([
            [
                'kode' => '001',
                'nama_kategori' => 'pemasaran',
            ],[
                'kode' => '002',
                'nama_kategori' => 'sdm',
            ],[
                'kode' => '003',
                'nama_kategori' => 'operasional',
            ]
            ]);
    }
}
