<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porsche extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_model',
        'kategori',
        'harga',
        'stok',
        'deskripsi',
        'gambar'
    ];
}