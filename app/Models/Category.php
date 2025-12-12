<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'kategoria_id',
        'kategoria_nev',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Ingatlan::class, 'kategoria_id');
    }
}
