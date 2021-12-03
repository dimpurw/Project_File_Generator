<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat extends Model
{
    protected $table = 'surat';
    protected $fillable = [
        'TempatPenulisan',
        'TanggalPenulisan',
        'TujuanSurat',
        'AlamatTujuan',
        'SalamPembuka',
        'Isi',
        'SalamPenutup',
        'Pengirim',
        'Ttd',
        'JenisSurat'
    ];
}
