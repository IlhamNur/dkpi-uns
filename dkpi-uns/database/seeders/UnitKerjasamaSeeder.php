<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnitKerjasama;

class UnitKerjasamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitKerjasama::create([
            'unit' => 'Universitas (Rektorat)'
         ]);
 
         UnitKerjasama::create([
             'unit' => 'Pascasarjana/Fakultas/Jurusan/Program Studi'
         ]);
 
         UnitKerjasama::create([
             'unit' => 'Lembaga (LPPM dan LP3M)'
         ]);
 
         UnitKerjasama::create([
             'unit' => 'UPT',
          ]);
 
          UnitKerjasama::create([
             'unit' => 'UPP',
          ]);
 
          UnitKerjasama::create([
             'unit' => 'Lainnya',
          ]);
    }
}
