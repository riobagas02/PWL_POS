<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id'=> 1, 'kategori_id' => 1,'barang_kode'=> 'SPT1', 'barang_nama'=>'Toyota Supra', 'harga_beli'=> 2200, 'harga_jual' => 2800],
            ['barang_id'=> 2, 'kategori_id' => 1,'barang_kode'=> 'SPT2', 'barang_nama'=>'Mazda RX8', 'harga_beli'=> 250, 'harga_jual' => 280],
            ['barang_id'=> 3, 'kategori_id' => 2,'barang_kode'=> 'SDN1', 'barang_nama'=>'Honda Civic', 'harga_beli'=> 600, 'harga_jual' => 620],
            ['barang_id'=> 4, 'kategori_id' => 2,'barang_kode'=> 'SDN2', 'barang_nama'=>'Honda City', 'harga_beli'=> 350, 'harga_jual' => 355],
            ['barang_id'=> 5, 'kategori_id' => 3,'barang_kode'=> 'OFR1', 'barang_nama'=>'Land Cruiser', 'harga_beli'=> 2500, 'harga_jual' => 2550],
            ['barang_id'=> 6, 'kategori_id' => 3,'barang_kode'=> 'OFR2', 'barang_nama'=>'Rubicon', 'harga_beli'=> 1700, 'harga_jual' => 1750],
            ['barang_id'=> 7, 'kategori_id' => 4,'barang_kode'=> 'ELK1', 'barang_nama'=>'Tesla', 'harga_beli'=> 1500, 'harga_jual' => 1550],
            ['barang_id'=> 8, 'kategori_id' => 4,'barang_kode'=> 'ELK2', 'barang_nama'=>'Hyundai Ioniq', 'harga_beli'=> 780, 'harga_jual' => 790],
            ['barang_id'=> 9, 'kategori_id' => 5,'barang_kode'=> 'SUV1', 'barang_nama'=>'Honda HR-V', 'harga_beli'=> 380, 'harga_jual' => 390 ],
            ['barang_id'=> 10, 'kategori_id' => 5,'barang_kode'=> 'SUV2', 'barang_nama'=>'Toyota Rush', 'harga_beli'=> 280, 'harga_jual' => 290],

        ];
        
        DB::table('m_barang')->insert($data);
    }
}
