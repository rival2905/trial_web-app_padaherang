<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeris';
    protected $guarded = [];

    // ✅ RELASI KE KATEGORI
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
