<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class layanan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('layanans')->insert([
            [
                'id_kategori' => '1',
                'nama_layanan' => 'HSI B2B Bisnis Unlimited',
                'detail' => 'Koneksi internet cepat dan stabil untuk bisnis dengan rasio
                kecepatan 1:1 dan tanpa batas FUP'
            ], [
                'id_kategori' => '2',
                'nama_layanan' => 'Netmonk Monitoring Jaringan',
                'detail' => 'Pantau status & kondisi jaringan HSI B2B melalui dashboard monitoring
                secara real-time dan proaktif'
            ], [
                'id_kategori' => '3',
                'nama_layanan' => 'Antares IoT Solutions',
                'detail' => 'Rangkaian solusi Internet of Things unggulan untuk transformasi efisiensi dan
                produktivitas bisnis'
            ],
        ]);
    }
}
