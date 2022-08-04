<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RuangLingkup;

class RuangLingkupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RuangLingkup::create([
            'ruang' => 'Pendidikan'
         ]);
 
         RuangLingkup::create([
             'ruang' => 'Pelatihan'
         ]);
 
         RuangLingkup::create([
             'ruang' => 'Penelitian'
         ]);
 
         RuangLingkup::create([
             'ruang' => 'Pengabdian Kepada Masyarakat',
          ]);
 
          RuangLingkup::create([
             'ruang' => 'Sumber Daya Manusia',
          ]);

          RuangLingkup::create([
            'ruang' => 'Pemagangan Bersertifikat',
         ]);
         
         RuangLingkup::create([
            'ruang' => 'Pemagangan atau Praktik Kerja MBKM',
         ]);

         RuangLingkup::create([
            'ruang' => 'Beasiswa',
         ]);

         RuangLingkup::create([
            'ruang' => 'Pelatihan atau Praktik Kerja MBKM',
         ]);

         RuangLingkup::create([
            'ruang' => 'Beasiswa',
         ]);
 
         RuangLingkup::create([
            'ruang' => 'Pelatihan Dosen atau Instruktur',
         ]);

         RuangLingkup::create([
            'ruang' => 'Pengembangan Sistem atau Produk',
         ]);

         RuangLingkup::create([
            'ruang' => 'Pertukaran Mahasiswa MBKM',
         ]);

         RuangLingkup::create([
            'ruang' => 'Penyelenggaraan Seminar atau Workshop',
         ]);

         RuangLingkup::create([
            'ruang' => 'Pengiriman Praktisi sebagai Dosen',
         ]);

         RuangLingkup::create([
            'ruang' => 'Pertukaran Dosen',
         ]);

          RuangLingkup::create([
             'ruang' => 'Lainnya',
          ]);
    }
}
