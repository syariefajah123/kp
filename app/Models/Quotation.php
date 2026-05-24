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
        'file',
        'status',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    // Badge warna untuk status
    public function getStatusBadgeAttribute()
    {
        return match($this->status) {
            'pending'   => 'badge-warning',
            'diproses'  => 'badge-info',
            'selesai'   => 'badge-success',
            default     => 'badge-secondary',
        };
    }
}
