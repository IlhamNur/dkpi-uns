<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraSurvey extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $fillable = ['nama_lengkap', 'jabatan','email','instansi' ,'no_hp' ,'alamat_instansi'];

    protected $table = 'mitra_surveys';
    protected $guarded =  ['id'];

    public function instansis(){
        return $this->hasMany(Instansi::class, 'mitra_surveys_id', 'id');
    }

    public function hasJenisInstansiById($id){
        if($this->instansis->whereIn('jenis_instansis_id', $id)->first()){
            return true;
        }
        
        return false;
    }

    public function kerjasamas(){
        return $this->hasMany(Kerjasama::class, 'mitra_surveys_id', 'id');
    }

    public function hasUnitKerjasamaById($id){
        if($this->kerjasamas->whereIn('unit_kerjasamas_id', $id)->first()){
            return true;
        }
        
        return false;
    }

    public function lingkups(){
        return $this->hasMany(Lingkup::class, 'mitra_surveys_id', 'id');
    }

    public function hasRuangLingkupById($id){
        if($this->lingkups->whereIn('ruang_lingkups_id', $id)->first()){
            return true;
        }
        
        return false;
    }

    public function scopeFilter($query, array $filters)
    {   
        $query->when($filters['nama_lengkap'] ?? false, function($query, $nama_lengkap){
            return $query->where('nama_lengkap', 'like', '%' . $nama_lengkap. '%');
        });
    }
}
