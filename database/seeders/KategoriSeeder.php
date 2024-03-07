<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id'=> 1, 'kategori_kode' => 'SPT', 'kategori_nama'=>'Mobil Sport'],
            ['kategori_id'=> 2, 'kategori_kode' => 'SDN', 'kategori_nama'=>'Mobil Sedan'],
            ['kategori_id'=> 3, 'kategori_kode' => 'OFR', 'kategori_nama'=>'Mobil Off Road'],
            ['kategori_id'=> 4, 'kategori_kode' => 'ELK', 'kategori_nama'=>'Mobil Elektrik'],
            ['kategori_id'=> 5, 'kategori_kode' => 'SUV', 'kategori_nama'=>'Mobil SUV'],

        ];
        
        DB::table('m_kategori')->insert($data);
    }
}
