<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemesanan_armadas')->insert([
            [
                'armada_id' => 1, // relasi ke armadas.id
                'pemesan_name' => 'PT Maju Jaya',
                'jenis_kendaraan' => 'Truck Box',
                'tanggal_pemesanan' => '2025-09-20',
                'detail_barang' => 'Pengiriman barang elektronik dari Malang ke Surabaya',
                'created_at' => now('asia/jakarta'),
            ],
            [
                'armada_id' => 2,
                'pemesan_name' => 'CV Sejahtera',
                'jenis_kendaraan' => 'Pickup',
                'tanggal_pemesanan' => '2025-09-21',
                'detail_barang' => 'Pengiriman bahan bangunan ke Kediri',
                'created_at' => now('asia/jakarta'),
            ],
        ]);
    }
}
