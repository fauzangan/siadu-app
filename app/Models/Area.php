<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_area';
    protected $guarded = [
        'id_area'
    ];

    public function aset(){
        return $this->hasMany(Aset::class, 'id_area');
    }
}
