<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $today = date('Y-m-d'); 
        
        $data = [
            [
                'stok_id'      => 1, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 2, 
                'supplier_id'  => 2, 
                'barang_id'    => 2, 
                'user_id'      => 1, 
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 100, 
            ], 
            [
                'stok_id'      => 3, 
                'supplier_id'  => 1, 
                'barang_id'    => 3, 
                'user_id'      => 1, 
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 75, 
            ],
            [
                'stok_id'      => 4, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 5, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 6, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 7, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 8, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 9, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 10, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 11, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 12, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 13, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 14, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
            [
                'stok_id'      => 15, 
                'supplier_id'  => 1, 
                'barang_id'    => 1, 
                'user_id'      => 1,
                'stok_tanggal' => $today, 
                'stok_jumlah'  => 50, 
            ],
        ];

        // Perintah untuk memasukkan data ke tabel 't_stok'
        DB::table('t_stok')->insert($data);
    }
}