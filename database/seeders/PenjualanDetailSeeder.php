<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insert([
            // Transaksi 1 (Budi Beli 2 Chitato)
            ['detail_id' => 1, 'penjualan_id' => 1, 'barang_id' => 1, 'harga' => 10000, 'jumlah' => 2, 'created_at' => now(), 'updated_at' => now()],
            // Transaksi 2 (Siti Beli 1 Taro)
            ['detail_id' => 2, 'penjualan_id' => 2, 'barang_id' => 2, 'harga' => 8000,  'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
            // Transaksi 3 (Andi Beli 3 Teh Pucuk & 1 Aqua)
            ['detail_id' => 3, 'penjualan_id' => 3, 'barang_id' => 3, 'harga' => 4500,  'jumlah' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['detail_id' => 4, 'penjualan_id' => 3, 'barang_id' => 4, 'harga' => 3500,  'jumlah' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
