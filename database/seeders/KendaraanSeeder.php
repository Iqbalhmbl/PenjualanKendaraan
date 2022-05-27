<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'gambar' => 'ALL NEW AVANZA 1.3.jpeg',
            'merek' => 'ALL NEW AVANZA 1.3',
            'tipe' => '1.3',
            'kendaraan' => '3',
            'jenis' => 'mobil',
            'tahun_keluaran' => '2022',
            'warna' => 'Hitam',
            'status' => 'tersedia',
            'harga' => '10000000',
        ]);

        Kendaraan::create([
            'gambar' => 'COROLLA CROSS 1.8 HYBRID AT.jpg',
            'merek' => 'COROLLA CROSS',
            'tipe' => '1.8 HYBRID',
            'kendaraan' => '3',
            'jenis' => 'mobil',
            'tahun_keluaran' => '2022',
            'warna' => 'Hitam',
            'status' => 'tersedia',
            'harga' => '14000000',
        ]);

        Kendaraan::create([
            'gambar' => 'KIJANG INNOVA 2.0 G MT BSN.jpg',
            'merek' => 'KIJANG INNOVA',
            'tipe' => '2.0 G MT BSN',
            'kendaraan' => '3',
            'jenis' => 'mobil',
            'tahun_keluaran' => '2022',
            'warna' => 'Silver',
            'status' => 'tersedia',
            'harga' => '17000000',
        ]);

        Kendaraan::create([
            'gambar' => 'NEW SIENTA 1.5 V CVT.jpg',
            'merek' => 'NEW SIENTA',
            'tipe' => '1.5 V CVT',
            'kendaraan' => '3',
            'jenis' => 'mobil',
            'tahun_keluaran' => '2022',
            'warna' => 'Merah',
            'status' => 'tersedia',
            'harga' => '20000000',
        ]);

        Kendaraan::create([
            'gambar' => 'RUSH 1.5 G MT.jpg',
            'merek' => 'RUSH',
            'tipe' => '1.5 G MT',
            'kendaraan' => '3',
            'jenis' => 'mobil',
            'tahun_keluaran' => '2022',
            'warna' => 'Putih',
            'status' => 'tersedia',
            'harga' => '19000000',
        ]);

        //

        Kendaraan::create([
            'gambar' => 'YAMAHA X-RIDE.jpg',
            'merek' => 'YAMAHA X-RIDE',
            'tipe' => '125',
            'kendaraan' => '2',
            'jenis' => 'motor',
            'tahun_keluaran' => '2018',
            'warna' => 'Hitam',
            'status' => 'tersedia',
            'harga' => '19000000',
        ]);

        Kendaraan::create([
            'gambar' => 'YAMAHA WR 155 R.jpg',
            'merek' => 'YAMAHA WR',
            'tipe' => ' 155 R',
            'kendaraan' => '1',
            'jenis' => 'motor',
            'tahun_keluaran' => '2021',
            'warna' => 'Hitam',
            'status' => 'tersedia',
            'harga' => '30000000',
        ]);

        Kendaraan::create([
            'gambar' => 'YAMAHA MIO Z.jpg',
            'merek' => 'YAMAHA MIO',
            'tipe' => 'Z',
            'kendaraan' => '2',
            'jenis' => 'motor',
            'tahun_keluaran' => '2019',
            'warna' => 'Merah',
            'status' => 'tersedia',
            'harga' => '17000000',
        ]);

        Kendaraan::create([
            'gambar' => 'YAMAHA GEAR 125 S.jpg',
            'merek' => 'YAMAHA GEAR',
            'tipe' => '125 S',
            'kendaraan' => '2',
            'jenis' => 'motor',
            'tahun_keluaran' => '2021',
            'warna' => 'Merah',
            'status' => 'tersedia',
            'harga' => '19000000',
        ]);

        Kendaraan::create([
            'gambar' => 'YAMAHA FAZZIO.jpg',
            'merek' => 'YAMAHA FAZZIO',
            'tipe' => 'MSV',
            'kendaraan' => '2',
            'jenis' => 'motor',
            'tahun_keluaran' => '2022',
            'warna' => 'Hijau',
            'status' => 'tersedia',
            'harga' => '22000000',
        ]);
    }
}
