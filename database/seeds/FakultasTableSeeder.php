<?php

use App\Fakultas;
use Illuminate\Database\Seeder;

class FakultasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fakultas::truncate();

        Fakultas::create([
            'nama_fakultas'=>'Fakultas Humaniora dan Bisnis',
        ]);
        Fakultas::create([
            'nama_fakultas'=>'Fakultas Teknologi dan Desain',
        ]);
    }
}
