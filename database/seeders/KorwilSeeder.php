<?php

namespace Database\Seeders;

use App\Models\Korwil;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class KorwilSeeder extends Seeder
{
    public function run()
    {
        $korwils = [
            [
                'nama' => 'TK',
                'gambar' => 'korwil-images/TK.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SMP',
                'gambar' => 'korwil-images/SMP.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'AMBARAWA',
                'gambar' => 'korwil-images/AMBARAWA.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BANCAK',
                'gambar' => 'korwil-images/BANCAK.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BANDUNGAN',
                'gambar' => 'korwil-images/BANDUNGAN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BERGAS',
                'gambar' => 'korwil-images/BERGAS.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BANYUBIRU',
                'gambar' => 'korwil-images/BANYUBIRU.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'BAWEN',
                'gambar' => 'korwil-images/BAWEN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // ... tambahkan data lainnya
        ];

        foreach ($korwils as $korwil) {
            Korwil::create($korwil);
        }
    }
}