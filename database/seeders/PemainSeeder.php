<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create();

        // // Ubah nilai $jumlahData sesuai dengan jumlah data yang ingin di-generate
        // $jumlahData = 50;

        // for ($i = 0; $i < $jumlahData; $i++) {
        //     Pemain::create([
        //         'nama' => $faker->name,
        //         'umur' => $faker->numberBetween(18, 40),
        //         'berat_badan' => $faker->numberBetween(50, 100),
        //         'tinggi' => $faker->numberBetween(165, 200),
        //         'kaki_utama' => $faker->randomElement([1, 2]),
        //         'pace' => $faker->numberBetween(60, 100),
        //         'shooting' => $faker->numberBetween(60, 100),
        //         'passing' => $faker->numberBetween(60, 100),
        //         'dribbling' => $faker->numberBetween(60, 100),
        //         'defending' => $faker->numberBetween(60, 100),
        //         'physical' => $faker->numberBetween(60, 100),
        //         'overall' => $faker->numberBetween(60, 100),
        //         'masuk_squad' => $faker->boolean(50)
        //     ]);

        //     }
    }
}
