<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    use HasFactory;
    protected $table = 'pengajar';

    public function kursus()
    {
        return $this->hasMany(Kursus::class, 'pengajar_id', 'id');
    }
}
