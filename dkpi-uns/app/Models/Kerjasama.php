<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    use HasFactory;

    protected $fillable = ['mitra_surveys_id', 'unit_kerjasamas_id'];

    public function unit_kerjasama(){
        return $this->hasOne(UnitKerjasama::class, 'id', 'unit_kerjasamas_id');
    }
}
