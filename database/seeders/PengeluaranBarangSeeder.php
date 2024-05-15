<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengeluaranBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PengeluaranBarang::create([
            'tgl_keluar' => '2024-05-16',
            'tujuan' => 'Gudang Utama',
            'kuantity' => 50,
            'kode_barang' => 1, // Pastikan id barang ini sudah ada di tabel barangs
        ]);


    }
}
