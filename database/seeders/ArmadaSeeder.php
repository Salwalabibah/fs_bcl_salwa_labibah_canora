<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArmadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('armadas')->insert([
            [
                'nomor_kendaraan' => 'N 1234 AB',
                'jenis_kendaraan' => 'Truck Box',
                'status_ketersediaan' => false,
                'kapasitas_muatan' => 5000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kendaraan' => 'B 5678 CD',
                'jenis_kendaraan' => 'Pickup',
                'status_ketersediaan' => false,
                'kapasitas_muatan' => 2000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_kendaraan' => 'L 9101 EF',
                'jenis_kendaraan' => 'Truck Tronton',
                'status_ketersediaan' => true,
                'kapasitas_muatan' => 12000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
