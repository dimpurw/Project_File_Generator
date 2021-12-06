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
    
    public function jeniscategory()
    {
        return $this->belongsto(category::class, 'id_category');
    }

}
