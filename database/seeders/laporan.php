<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class laporan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'id_status' => '1',
                'no_pelanggan' => '83729020',
                'masalah' => 'internet lemot',
                'solusi' => '',
            ],
            [
                'id_status' => '2',
                'no_pelanggan' => '8280292',
                'masalah' => 'internet lemot',
                'solusi' => 'restart'
            ],
        ]);
    }
}
