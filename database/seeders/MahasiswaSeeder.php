<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['Ragyl Mohammad Haekal', 'F1E120057'],
            ['Dini Safitri', 'F1E121151'],
            ['Dito Firmansyach', 'F1E120063'],
            ['Elisa Novitayanah', 'F1E121006'],
            ['Grishelda Ulfariyan Revaly', 'F1E121187'],
            ['Kelvin Adinata', 'F1E121116'],
            ['Muhamad Arrafi', 'F1E120054'],
            ['Rachmelia Rarnadhana', 'F1E121178'],
            ['Rifki Iskandar', 'F1E121220'],
            ['Riska Rahma Sari', 'F1E121194'],
            ['Tria Eka Lestari', 'F1E121009'],
            ['Valezza Juliani Arnflk', 'F1E120004'],
            ['Agnes Wulan Dari', 'F1E121218'],
            ['Amanda Stiawan', 'F1E120049'],
            ['Katrin Apriayu Napitu', 'F1E121106'],
            ['M.Hakan Haekal', 'F1E121221'],
            ['Muhammad Firly Ramadhan', 'F1E120007'],
            ['Putra Indi Apriliano', 'F1E120064'],
            ['Rabdiansya', 'F1E121067'],
            ['Raka Firmansyah', 'F1E121046'],
            ['Reidila Ariska Widya', 'F1E121189'],
            ['Yuda Fatoni', 'F1E121133'],
            ['Natasya Yonike Ambarita', 'F1E120032'],
            ['Adfa Aditiya', 'F1E121059'],
            ['Audrey Michelle Vincentine Pelealu', 'F1E121132'],
            ['Iqbal Revianda', 'F1E121049'],
            ['Julian Fahrizu', 'F1E120052'],
            ['M.Ari Saputra', 'F1E120022'],
            ['Muhammad Gema Ramadhan', 'F1E121138'],
            ['Najwa Aulla Saphana', 'F1E120051'],
            ['Opinur Destiana', 'F1E121082'],
            ['Rahul Marcellino Holis', 'F1E121147'],
            ['Tarisa', 'F1E120002'],
            ['Umar Al Masjid', 'F1E121164'],
            ['Saddam Hussein', 'F1E120061'],
            ['Ajeng Ayu Larasati', 'F1E121228'],
            ['Dzaky Athaulla Rajasa', 'F1E121016'],
            ['Harul Risina Siagian', 'F1E120038'],
            ['Imelda Raudati', 'F1E121092'],
            ['Muhamad Sadam Abdillah H', 'F1E120046'],
            ['Nabilah Ramalia', 'F1E121086'],
            ['Najla Muthia Khansa', 'F1E121098'],
            ['Ricky Maulana Sinurat', 'F1E120040'],
            ['Tien Rama Pakpahan', 'F1E120010'],
            ['Yosika Dian Saputri', 'F1E121111'],
            ['Delvit Armandani', 'F1E120008'],
            ['Aisyah Sabrina', 'F1E120019'],
            ['Alfadli Rahmat Putra', 'F1E121160'],
            ['Alyudha Maryon', 'F1E121165'],
            ['Ayatul Rahmat Tajri', 'F1E121030'],
            ['Ayu Indryani', 'F1E121095'],
            ['Dina Veronika', 'F1E121012'],
            ['Divo Rio Gllang', 'F1E121119'],
            ['Ketri Genes Yolanda', 'F1E121168'],
            ['Kiki Aulla Oriza', 'F1E121010'],
            ['Najml Laila', 'F1E120016'],
            ['Sukaya Uliza', 'F1E121177'],
            ['Usman Kamaruddin', 'F1E121091'],
            ['Sahdan Wira', 'F1E120023'],
            ['Christina Mutiara Ishak', 'F1E120026'],
            ['Devano Danendra', 'F1E121198'],
            ['Diah Ambarwati', 'F1E121153'],
            ['Farisyah Lutfiah Hanis', 'F1E121015'],
            ['Khairinnisa Putri.Z', 'F1E121170'],
            ['M.Hazron Redian', 'F1E121162'],
            ['M.Syahan Afdhal Hadaya', 'F1E120053'],
            ['Rizkl Dafta Muttaqin', 'F1E120058'],
            ['Robby Yehezklel Pardomuan', 'F1E120072'],
            ['Sri Sullstina', 'F1E121041'],
            ['Zikri Hanan', 'F1E120067'],
            ['Rahmad Adrian', 'F1E120065'],
            ['Arif Chandra Firmansynh', 'F1E120006'],
            ['Jesica Pitos Dwi Putri', 'F1E121181'],
            ['Julin Wulandari', 'F1E121191'],
            ['Jumiati Sadiah', 'F1E121070'],
            ['Nurhaliza', 'F1E121055'],
            ['Reni Triyaningsih', 'F1E121054'],
            ['Sahrul Gunawan', 'F1E121039'],
            ['Sahrul Ikhwan', 'F1E120037'],
            ['Sava Cavan Wiharja', 'F1E121127'],
            ['TITIN PRATIWI', 'F1E121112'],
            ['TIAS LUFIANI', 'F1E121185']
        ];

        foreach ($data as $d) {
            Mahasiswa::create([
                'nama' => $d[0],
                'nim' => $d[1],
                'password' => Hash::make('12345678'),
            ]);
        }
    }
}