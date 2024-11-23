<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenyusunKata extends Model
{
    use HasFactory;

    protected $table = 'menyusun_kata';

    protected $fillable = [
        'kalimat_acak',
        'urutan_benar',
    ];

    public function jawabanMenyusunKata()
    {
        return $this->hasMany(JawabanMenyusunKata::class, 'id_menyusun_kata');
    }
}
