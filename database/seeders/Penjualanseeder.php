<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        $data = [];
        
        // Nama pembeli fiktif
        $pembeli_names = [
            'Siti Fatimah', 'Siti Aminah', 'Denny Caknan', 'Jendaral Soedirman', 'Dzaky Rahman', 
            'Kantor Jaya wijaya', 'Kantor Best Profit', 'Ir.Jokowi', 'Toko Sejahtera', 'Nur Laila'
        ];
        
        
        for ($i = 1; $i <= 10; $i++) {
            
            
            $penjualan_date = $now->copy()->subDays($i)->toDateString();
            
            $data[] = [
                'penjualan_id'      => $i, 
                'user_id'           => 3, 
                'pembeli'           => $pembeli_names[$i - 1], 
                'penjualan_kode'    => 'TRX' . str_pad($i, 7, '0', STR_PAD_LEFT), 
                'penjualan_tanggal' => $penjualan_date, 
                'created_at'        => $now->copy()->subDays($i)->addHours(8),
                'updated_at'        => $now->copy()->subDays($i)->addHours(8),
            ];
        }

        // Perintah untuk memasukkan 10 data transaksi ke tabel 't_penjualan'
        DB::table('t_penjualan')->insert($data);
    }
}