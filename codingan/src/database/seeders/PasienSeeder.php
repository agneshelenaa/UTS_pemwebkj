<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'nama' => 'Kiana Kaslana',
                'nik' => '3201010101010001',
                'usia' => 19,
                'jenis_kelamin' => 'Perempuan',
                'keluhan' => 'Demam tinggi selama 3 hari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joko Suripto',
                'nik' => '3201010101010002',
                'usia' => 20,
                'jenis_kelamin' => 'Laki-laki',
                'keluhan' => 'Batuk kering dan tenggorokan gatal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Marlina',
                'nik' => '3201010101010003',
                'usia' => 45,
                'jenis_kelamin' => 'Perempuan',
                'keluhan' => 'Nyeri pada persendian lutut',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
