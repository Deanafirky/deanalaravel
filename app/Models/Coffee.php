<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'nama',
        'email',
        'no_hp',
        'nama_barang',
        'jumlah',
        'harga'
        
    ];
}
