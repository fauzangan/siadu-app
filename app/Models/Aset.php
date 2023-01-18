<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_aset';
    protected $guarded = [
        'id_aset'
    ];

    public function area(){
        return $this->belongsTo(Area::class, 'id_area');
    }

    public function golongan(){
        return $this->belongsTo(Golongan::class, 'id_golongan');
    }
}
