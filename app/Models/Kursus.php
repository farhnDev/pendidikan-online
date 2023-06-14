<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $table = 'kursus';

    public function pengajar()
    {
        return $this->belongsTo(Pengajar::class, 'pengajar_id', 'id');
    }

    public function materis()
    {
        return $this->hasMany(Materi::class, 'id');
    }
}
