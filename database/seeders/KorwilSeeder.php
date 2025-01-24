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
            [
                'nama' => 'BRINGIN',
                'gambar' => 'korwil-images/BRINGIN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'GETASAN',
                'gambar' => 'korwil-images/GETASAN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'JAMBU',
                'gambar' => 'korwil-images/JAMBU.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'KALIWUNGU',
                'gambar' => 'korwil-images/KALIWUNGU.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'PABELAN',
                'gambar' => 'korwil-images/PABELAN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'PRINGAPUS',
                'gambar' => 'korwil-images/PRINGAPUS.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SUMOWONO',
                'gambar' => 'korwil-images/SUMOWONO.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SURUH',
                'gambar' => 'korwil-images/SURUH.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'SUSUKAN',
                'gambar' => 'korwil-images/SUSUKAN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'TENGARAN',
                'gambar' => 'korwil-images/TENGARAN.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'TUNTANG',
                'gambar' => 'korwil-images/TUNTANG.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'UNGARAN BARAT',
                'gambar' => 'korwil-images/UNGARAN BARAT.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'UNGARAN TIMUR',
                'gambar' => 'korwil-images/UNGARAN TIMUR.jpg',
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