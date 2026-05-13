<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = [
    'nama',
    'perusahaan',
    'whatsapp',
    'jenis_packaging',
    'material',
    'quantity',
    'budget',
    'deskripsi',
    'file_desain' 
];
}