<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PenilaianKepuasan;

class PenilaianKepuasanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PenilaianKepuasan::create([
            'pertanyaan' => 'Proses penyusunan naskah kerjasama (MoU dan PKS) dengan UNS dilakukan secara cepat dan tepat waktu',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Tidak terdapat kesulitan dalam prosedur kerjasama yang ditetapkan oleh UNS',
        ]);
        
        PenilaianKepuasan::create([
            'pertanyaan' => 'Pegawai di bidang kerjasama bekerja secara profesional dan responsif dalam memenuhi kebutuhan mitra',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Pegawai di bidang kerjasama memberikan pelayanan yang santun, ramah, dan bersahabat',
        ]);
        
        PenilaianKepuasan::create([
            'pertanyaan' => 'Tenaga Ahli UNS yang bekerja sama dengan mitra kompeten dan sesuai dengan kepakaran',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'UNS memberikan pendampingan yang baik untuk memenuhi kebutuhan mitra kerjasama',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Mitra kerjasama memperoleh manfaat dari kerjasama yang terjalin dengan UNS',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Implementasi kerjasama sesuai dengan MoU/PKS yang telah disepakati',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'UNS secara proaktif menawarkan kepada mitra kerjasama untuk memulai kerjasama baru ataupun melanjutkan kerjasama yang sudah berakhir',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'UNS secara proaktif menghubungi mitra kerjasama untuk perencanaan implementasi sebagai tindak lanjut MoU yang telah ditandatangani',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Laporan akhir kerjasama dikomunikasikan dengan baik dan tepat waktu',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Mekanisme pelaporan keuangan pada kegiatan kerjasama dengan UNS tidak menyulitkan',
        ]);

        PenilaianKepuasan::create([
            'pertanyaan' => 'Mitra kerjasama tertarik untuk menjalin kerjasama kembali dengan UNS di masa mendatang',
        ]);
    }
}
