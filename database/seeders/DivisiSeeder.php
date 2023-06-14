<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Divisi;

class DivisiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['DU', 'Dana Usaha'],
            ['HM', 'Hubungan Masyarakat'],
            ['MB', 'Minat dan Bakat'],
            ['MI', 'Media dan Informasi'],
            ['PS', 'Pengembangan Sumber Daya Anggota'],
            ['RT', 'Riset dan Teknologi'],
            ['SA', 'Sosial dan Agama'],
        ];

        foreach ($data as $d) {
            Divisi::create([
                'id_divisi' => $d[0],
                'nama_divisi' => $d[1],
            ]);
        }
    }
}