<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use category;
class surat extends Model
{
    protected $table = 'surat';
    protected $fillable = [
        'file_surat',
        'id_category'
    ];
    
    public function category()
    {
        return $this->hasOne(category::class, 'id_category');
    }

}
