<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanMenyusunKata extends Model
{
    use HasFactory;

    protected $table = 'jawaban_menyusun_kata';

    protected $fillable = [
        'id_menyusun_kata',
        'id_data_diri',
        'jawaban',
        'benar',
    ];

    public function menyusunKata()
    {
        return $this->belongsTo(MenyusunKata::class, 'id_menyusun_kata');
    }

    public function dataDiri()
    {
        return $this->belongsTo(DataDiri::class, 'id_data_diri');
    }
}
