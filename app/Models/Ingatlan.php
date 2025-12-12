<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'ingatlan_id',
        'kategoria_id',
        'leiras',
        'datum',
        'tehermentes',
        'ar',
        'kepurl',
        'created_at',
        'updated_at'
    ];

    public function ingatlanok()
    {
        return $this->hasMany(Category::class, 'kategoria_id');
    }
}
