<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JawabanPilihanGanda extends Model
{
    use HasFactory;

    protected $table = 'jawaban_pilihan_ganda';

    protected $fillable = [
        'id_pilihan_ganda',
        'id_data_diri',
        'jawaban',
        'benar',
    ];

    public function pilihanGanda()
    {
        return $this->belongsTo(PilihanGanda::class, 'id_pilihan_ganda');
    }

    public function dataDiri()
    {
        return $this->belongsTo(DataDiri::class, 'id_data_diri');
    }
}
