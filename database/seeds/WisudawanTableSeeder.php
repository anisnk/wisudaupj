<?php

use App\Wisudawan;
use Illuminate\Database\Seeder;

class WisudawanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wisudawan::truncate();

        Wisudawan::create([
            'user_id'=>'2',
            'prodi_id'=>'8',
            'nama'=>'Anis Naufal Karmayuda',
            'nim'=>'2017071020',
            'tempat_lahir'=>'Canada',
            'tgl_lahir'=>'1999-10-31',
            'alamat'=>'Sydney',
            'agama'=>'islam',
            'no_telp'=>'0813215432',
            'ipk'=>'4.0',
            'judul_ta'=>'ABCDEFGH',
            'th_masuk'=>'2017',
            'th_keluar'=>'2021',
            'nama_ayah'=>'Andre',
            'nama_ibu'=>'Dewang',
            'no_telp_ortu'=>'081232543',
            'alamat_ortu'=>'abcdefghijfdkfl',
        ]);
    }
}
