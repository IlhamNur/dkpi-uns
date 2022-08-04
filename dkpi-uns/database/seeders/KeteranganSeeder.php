<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keterangan;

class KeteranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keterangan::create([
            'keterangan' => 'Sangat Tidak Puas',
        ]);

        Keterangan::create([
            'keterangan' => 'Tidak Puas',
        ]);

        Keterangan::create([
            'keterangan' => 'Puas',
        ]);

        Keterangan::create([
            'keterangan' => 'Sangat Puas',
        ]);

        Keterangan::create([
            'keterangan' => 'Sangat Puas Sekali',
        ]);
    }
}
