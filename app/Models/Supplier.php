<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_supplier';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'telepon',
        'alamat',
    ];
}
