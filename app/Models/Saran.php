<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saran extends Model
{
    protected $table = 'saran';
    protected $fillable = ['id_data_diri', 'saran'];

    public function dataDiri()
    {
        return $this->belongsTo(DataDiri::class, 'id_data_diri');
    }
}
