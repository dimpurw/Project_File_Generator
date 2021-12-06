<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use category;
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
        'id_category'
    ];
    
    public function jeniscategory()
    {
        return $this->belongsto(category::class, 'id_category');
    }

}
