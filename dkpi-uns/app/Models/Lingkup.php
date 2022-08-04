<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingkup extends Model
{
    use HasFactory;

    protected $fillable = ['mitra_surveys_id', 'ruang_lingkups_id'];

    public function ruang_lingkup(){
        return $this->hasOne(RuangLingkup::class, 'id', 'ruang_lingkups_id');
    }
}
