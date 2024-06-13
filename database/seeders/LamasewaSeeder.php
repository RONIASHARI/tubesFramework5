<?php

namespace Database\Seeders;

use Database\Factories\LamasewaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LamasewaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lamasewas')->insert([
            [
                'namasewa' => 'Harian',
                'durasi' => 1,
                'keterangan' => 'Sewa untuk satu hari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namasewa' => 'Harian',
                'durasi' => 2,
                'keterangan' => 'Sewa untuk dua hari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'namasewa' => 'Harian',
                'durasi' => 3,
                'keterangan' => 'Sewa untuk tiga hari',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
