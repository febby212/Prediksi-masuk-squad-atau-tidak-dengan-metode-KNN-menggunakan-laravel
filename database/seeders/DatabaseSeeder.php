<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'role' => 'admin',
        ]);

        Role::create([
            'role' => 'user',
        ]);


    DB::table('users')->insert([
        'name' => 'Shin Tae Young',
        'email' => 'sty@gmail.com',
        'password' => Hash::make('password'),
        'role' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('users')->insert([
        'name' => 'Jose Mourinho',
        'email' => 'josemou@example.com',
        'password' => Hash::make('password'),
        'role' => 2,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Buat 1 admin dengan role 1 (admin)
    DB::table('users')->insert([
        'name' => 'Dania Dana',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('password'),
        'role' => 1,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    DB::table('nilai_k_s')->insert([
        'jenis' => 'nilai k penyerang',
        'nilai_k' => '5'
    ]);

    DB::table('nilai_k_s')->insert([
        'jenis' => 'nilai k gelandang',
        'nilai_k' => '3'
    ]);

    DB::table('nilai_k_s')->insert([
        'jenis' => 'nilai k bertahan',
        'nilai_k' => '7'
    ]);

    DB::table('nilai_k_s')->insert([
        'jenis' => 'nilai k gk',
        'nilai_k' => '9'
    ]);
    }
}
