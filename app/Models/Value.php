<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Value extends Model
{
    use HasFactory;
    protected $table = 'values';
    protected $fillable = [
        'variable',
        'id_surats'
    ];
    public function value()
    {
        return $this->belongsto(surat::class);
    }

}
