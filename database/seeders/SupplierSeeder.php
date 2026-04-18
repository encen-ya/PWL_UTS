<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Garuda Food', 'supplier_alamat' => 'Jakarta', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'PT Indofood', 'supplier_alamat' => 'Bandung', 'created_at' => now(), 'updated_at' => now()],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'PT Unilever', 'supplier_alamat' => 'Surabaya', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
