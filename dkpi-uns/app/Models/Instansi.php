<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;

    protected $fillable = ['mitra_surveys_id', 'jenis_instansis_id'];

    public function jenis_instansi(){
        return $this->hasOne(JenisInstansi::class, 'id', 'jenis_instansis_id');
    }
}
