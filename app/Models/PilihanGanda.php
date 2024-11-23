<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihanGanda extends Model
{
    use HasFactory;

    protected $table = 'pilihan_ganda';

    protected $fillable = [
        'pertanyaan',
        'jawaban_benar',
    ];

    public function jawabanPilihanGanda()
    {
        return $this->hasMany(JawabanPilihanGanda::class, 'id_pilihan_ganda');
    }
}
