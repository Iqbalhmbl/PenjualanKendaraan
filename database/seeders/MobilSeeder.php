<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mobil::create([
            'mesin' => '2NR-FE',
            'kapasitas_penumpang' => '7',
            'tipe' => 'MPV',
        ]);
        //NEW SIENTA 1.5 V CVT

        Mobil::create([
            'mesin' => '1 TR-FE',
            'kapasitas_penumpang' => '8',
            'tipe' => 'MPV',
        ]);
        //KIJANG INNOVA 2.0 G M/T BSN
        Mobil::create([
            'mesin' => '1.3L 98PS',
            'kapasitas_penumpang' => '7',
            'tipe' => 'MPV',
        ]);
        //ALL NEW AVANZA 1.3
        Mobil::create([
            'mesin' => '2NR-VE',
            'kapasitas_penumpang' => '7',
            'tipe' => 'SUV',
        ]);
        //RUSH 1.5 G M/T
        Mobil::create([
            'mesin' => '2ZR-FE',
            'kapasitas_penumpang' => '5',
            'tipe' => 'SUV',
        ]);
        //COROLLA CROSS 1.8 HYBRID A/T
    }
}
