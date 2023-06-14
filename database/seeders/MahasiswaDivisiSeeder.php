<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MahasiswaDivisi;


class MahasiswaDivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['F1E120057', 'DU'],
            ['F1E121151', 'DU'],
            ['F1E120063', 'DU'],
            ['F1E121006', 'DU'],
            ['F1E121187', 'DU'],
            ['F1E121116', 'DU'],
            ['F1E120054', 'DU'],
            ['F1E121178', 'DU'],
            ['F1E121220', 'DU'],
            ['F1E121194', 'DU'],
            ['F1E121009', 'DU'],
            ['F1E120004', 'HM'],
            ['F1E121218', 'HM'],
            ['F1E120049', 'HM'],
            ['F1E121106', 'HM'],
            ['F1E121221', 'HM'],
            ['F1E120007', 'HM'],
            ['F1E120064', 'HM'],
            ['F1E121067', 'HM'],
            ['F1E121046', 'HM'],
            ['F1E121189', 'HM'],
            ['F1E121133', 'HM'],
            ['F1E120032', 'MI'],
            ['F1E121059', 'MI'],
            ['F1E121132', 'MI'],
            ['F1E121049', 'MI'],
            ['F1E120052', 'MI'],
            ['F1E120022', 'MI'],
            ['F1E121138', 'MI'],
            ['F1E120051', 'MI'],
            ['F1E121082', 'MI'],
            ['F1E121147', 'MI'],
            ['F1E120002', 'MI'],
            ['F1E121164', 'MI'],
            ['F1E120061', 'MB'],
            ['F1E121228', 'MB'],
            ['F1E121016', 'MB'],
            ['F1E120038', 'MB'],
            ['F1E121092', 'MB'],
            ['F1E120046', 'MB'],
            ['F1E121086', 'MB'],
            ['F1E121098', 'MB'],
            ['F1E120040', 'MB'],
            ['F1E120010', 'MB'],
            ['F1E121111', 'MB'],
            ['F1E120008', 'PS'],
            ['F1E120019', 'PS'],
            ['F1E121160', 'PS'],
            ['F1E121165', 'PS'],
            ['F1E121030', 'PS'],
            ['F1E121095', 'PS'],
            ['F1E121012', 'PS'],
            ['F1E121119', 'PS'],
            ['F1E121168', 'PS'],
            ['F1E121010', 'PS'],
            ['F1E120016', 'PS'],
            ['F1E121177', 'PS'],
            ['F1E121091', 'PS'],
            ['F1E120023', 'RT'],
            ['F1E120026', 'RT'],
            ['F1E121198', 'RT'],
            ['F1E121153', 'RT'],
            ['F1E121015', 'RT'],
            ['F1E121170', 'RT'],
            ['F1E121162', 'RT'],
            ['F1E120053', 'RT'],
            ['F1E120058', 'RT'],
            ['F1E120072', 'RT'],
            ['F1E121041', 'RT'],
            ['F1E120067', 'RT'],
            ['F1E120065', 'SA'],
            ['F1E120006', 'SA'],
            ['F1E121181', 'SA'],
            ['F1E121191', 'SA'],
            ['F1E121070', 'SA'],
            ['F1E121055', 'SA'],
            ['F1E121054', 'SA'],
            ['F1E121039', 'SA'],
            ['F1E120037', 'SA'],
            ['F1E121127', 'SA'],
            ['F1E121112', 'SA'],
            ['F1E121185', 'SA'],
        ];
        
        foreach ($data as $d) {
            MahasiswaDivisi::create([
                'nim' => $d[0],
                'id_divisi' => $d[1],
            ]);
        }
    }
}