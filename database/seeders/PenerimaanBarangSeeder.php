<?php

use Illuminate\Database\Seeder;
use App\Models\PenerimaanBarang;

class PenerimaanBarangSeeder extends Seeder
{
    public function run(){
        PenerimaanBarang::create([
            'tgl_penyimpanan' => '2024-05-16',
            'alamat' => 'Jl. Contoh Alamat No. 123',
            'kode_barang' => 1, // Pastikan id barang ini sudah ada di tabel barangs
            'kuantity' => 100,
        ]);
    }
}