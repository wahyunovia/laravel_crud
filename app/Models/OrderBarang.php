<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderBarang extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_po';

    protected $fillable = [
        'tanggal',
        'kode_supplier',
        'PPN'
    ];
}
