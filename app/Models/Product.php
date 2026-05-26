<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    'nama',
    'jenis',
    'kategori',
    'deskripsi',
    'gambar',
    'is_active',
];
    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getGambarUrlAttribute()
    {
        return $this->gambar
            ? asset('storage/' . $this->gambar)
            : asset('images/no-image.jpg');
    }
}