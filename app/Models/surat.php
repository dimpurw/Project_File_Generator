<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use category;
class surat extends Model
{
    use HasFactory;
    protected $table = 'surat';
    protected $fillable = [
        // 'judul_surat',
        'file_surat',
        'id_category',
        'id_users',
    ];
    
    public function categorys()
    {
        return $this->belongsto(category::class, 'id_category');
    }
     public function users()
    {
        return $this->belongsto(user::class, 'id_users');
    }

}
