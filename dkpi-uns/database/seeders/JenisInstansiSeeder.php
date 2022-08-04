<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisInstansi;

class JenisInstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisInstansi::create([
           'jenis' => 'Perguruan Tinggi'
        ]);

        JenisInstansi::create([
            'jenis' => 'Lembaga Pendidikan'
        ]);

        JenisInstansi::create([
            'jenis' => 'Sekolah'
        ]);

        JenisInstansi::create([
            'jenis' => 'Instansi Pendidikan',
         ]);

         JenisInstansi::create([
            'jenis' => 'Instansi Pemerintah',
         ]);

         JenisInstansi::create([
            'jenis' => 'Instansi Swasta',
         ]);

         JenisInstansi::create([
            'jenis' => 'Industri/Skateholder',
         ]);

         JenisInstansi::create([
            'jenis' => 'Rumah Sakit',
         ]);

         JenisInstansi::create([
            'jenis' => 'Organisasi',
         ]);

         JenisInstansi::create([
            'jenis' => 'Dunia Usaha',
         ]);

         JenisInstansi::create([
            'jenis' => 'Lainnya',
         ]);

    }
}
