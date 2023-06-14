<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Welcome Maru', '2022-09-04', 'Saddam Husein'],
            ['Makrab akt 2022', '2022-12-03', 'Sahdan Wira'],
            ['SI wisuda 102', '2023-01-21', 'Dzaky Athaullah Rajasa'],
            ['SI Goes To School', '2023-01-06', 'Putra Indi Apriliano'],
            ['Training Dasar Organisasi', '2023-03-11', 'Ayatul Rahmat Tajri'],
            ['Bukber Himasi', '2023-04-10', 'Adrian Rahmad'],
            ['SI wisuda 103', '2023-05-20', 'Usman Kamarudin'],
            ['Dies Natalis SI 10th', '2023-06-08', 'M Saddam Abdillah'],
        ];
        foreach ($data as $d) {
            Event::create([
                'nama_acara' => $d[0],
                'tanggal' => $d[1],
                'ketua_pelaksana' => $d[2],
            ]);
        }
    }
}