<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_po';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga',
        'kuantiti',
        //'Tanggal_simpan'
    ];

}
