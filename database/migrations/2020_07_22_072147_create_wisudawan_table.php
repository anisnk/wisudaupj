<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisudawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wisudawan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('prodi_id');
            $table->string('nama');
            $table->string('nama_akte');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('agama');
            $table->string('no_telp');
            $table->string('nim');
            $table->string('ipk');
            $table->string('judul_ta');
            $table->string('th_masuk');
            $table->string('th_keluar');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('no_telp_ortu');
            $table->string('alamat_ortu');
            $table->timestamps();

            $table->index('user_id');
            $table->index('prodi_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wisudawan');
    }
}
