<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = ['id_data_diri', 'id_pertanyaan_survey', 'jawaban'];

    public function dataDiri()
    {
        return $this->belongsTo(DataDiri::class, 'id_data_diri');
    }

    public function pertanyaanSurvey()
    {
        return $this->belongsTo(PertanyaanSurvey::class, 'id_pertanyaan_survey');
    }
}
