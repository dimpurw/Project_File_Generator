<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use category;
class surat extends Model
{
    protected $table = 'surat';
    protected $fillable = [
        // 'judul_surat',
        'file_surat',
        'id_category',
        'id_users',
    ];
    
    public function categorys()
    {
        return $this->hasmany(category::class, 'id_category', 'id');
    }
     public function users()
    {
        return $this->belongsto(user::class, 'id_users');
    }

}
