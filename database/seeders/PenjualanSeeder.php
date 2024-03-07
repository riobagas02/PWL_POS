<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id'=> 1, 'user_id'=> 1,'pembeli' => 'Ashel','penjualan_kode' => 'PK1', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 2, 'user_id'=> 1,'pembeli' => 'Bari','penjualan_kode' => 'PK2', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 3, 'user_id'=> 2,'pembeli' => 'Clara','penjualan_kode' => 'PK3', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 4, 'user_id'=> 2,'pembeli' => 'Dion','penjualan_kode' => 'PK4', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 5, 'user_id'=> 3,'pembeli' => 'Elsa','penjualan_kode' => 'PK5', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 6, 'user_id'=> 3,'pembeli' => 'Fiony','penjualan_kode' => 'PK6', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 7, 'user_id'=> 3,'pembeli' => 'Galuh','penjualan_kode' => 'PK7', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 8, 'user_id'=> 3,'pembeli' => 'Happy','penjualan_kode' => 'PK8', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 9, 'user_id'=> 3,'pembeli' => 'Isyana','penjualan_kode' => 'PK9', 'penjualan_tanggal'=>'2024-03-05'],
            ['penjualan_id'=> 10, 'user_id'=> 3,'pembeli' => 'Jeremy','penjualan_kode' => 'PK10', 'penjualan_tanggal'=>'2024-03-05'],

        ];
        DB::table('t_penjualan')->insert($data);
    }
}
