<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Seeder;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motor::create([
            'transmisi' => 'Manual',
            'suspensi' => 'Telescopic',
            'mesin' => 'SOHC',
        ]);
        // YAMAHA WR 155 R Rp. 38.000.000
        
        Motor::create([
            'transmisi' => 'Automatic',
            'suspensi' => 'Telescopic',
            'mesin' => 'SOHC',
        ]);
        //YAMAHA FAZZIO Rp. 22.000.000
        //YAMAHA GEAR 125 S Rp. 18.000.000
        //YAMAHA XRIDE Rp. 19.400.000
        //YAMAHA MIO Z Rp. 15.800.000
    }
}
