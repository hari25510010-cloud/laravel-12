<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $data = [
            [
                'supplier_id'=> 1, 
                'supplier_kode'=> 'SUP01',  
                'supplier_nama'=>'CV Jaya Abadi',
                'supplier_alamat'=> 'Jln.Mayjen Sungkono'
            ],
            [
                'supplier_id'=> 2, 
                'supplier_kode'=> 'SUP02',  
                'supplier_nama'=>'UD Melati Bangsa',
                'supplier_alamat'=> 'Jln.Jendral Soedirman'
            ],
            [
                'supplier_id'=> 3, 
                'supplier_kode'=> 'SUP03',  
                'supplier_nama'=>'PT Maju Sejahtera',
                'supplier_alamat'=> 'Jln.Malioboro'
            ],
        ];
        DB::table('m_supplier')->insert($data);

    }
}