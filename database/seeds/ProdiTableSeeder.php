<?php

use App\Prodi;
use Illuminate\Database\Seeder;

class ProdiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prodi::truncate();

        Prodi::create([
            'nama_prodi'=>'Akuntansi',
            'fakultas_id'=>'1'
        ]);
        Prodi::create([
            'nama_prodi'=>'Manajemen',
            'fakultas_id'=>'1'
        ]);
        Prodi::create([
            'nama_prodi'=>'Ilmu Komunikasi',
            'fakultas_id'=>'1'
        ]);
        Prodi::create([
            'nama_prodi'=>'Psikolog',
            'fakultas_id'=>'1'
        ]);
        Prodi::create([
            'nama_prodi'=>'Desain Komunikasi Visual',
            'fakultas_id'=>'2'
        ]);
        Prodi::create([
            'nama_prodi'=>'Desain Produk',
            'fakultas_id'=>'2'
        ]);
        Prodi::create([
            'nama_prodi'=>'Informatika',
            'fakultas_id'=>'2'
        ]);
        Prodi::create([
            'nama_prodi'=>'Sistem Informasi',
            'fakultas_id'=>'2'
        ]);
        Prodi::create([
            'nama_prodi'=>'Teknik Sipil',
            'fakultas_id'=>'2'
        ]);
        Prodi::create([
            'nama_prodi'=>'Arsitektur',
            'fakultas_id'=>'2'
        ]);
    }
}
