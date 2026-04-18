<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['penjualan_id' => 1, 'user_id' => 2, 'pembeli' => 'Budi', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Siti', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['penjualan_id' => 3, 'user_id' => 2, 'pembeli' => 'Andi', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
