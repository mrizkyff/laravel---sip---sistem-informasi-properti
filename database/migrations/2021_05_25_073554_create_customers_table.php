<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kartu_identitas');
            $table->string('no_identitas')->unique();
            $table->string('alamat_diri');
            $table->string('telp_diri');
            $table->string('email');
            $table->string('gaji');
            $table->string('npwp');
            $table->string('keterangan_diri');
            $table->string('pekerjaan');
            $table->string('nama_kantor');
            $table->string('alamat_kantor');
            $table->string('telp_kantor');
            $table->string('keterangan_pekerjaan');
            $table->string('status');
            $table->string('nama_pasangan');
            $table->string('telp_pasangan');
            $table->string('pekerjaan_pasangan');
            $table->string('alamat_kantor_pasangan');
            $table->string('keterangan_pasangan');
            $table->string('nama_keluarga');
            $table->string('hubungan_keluarga');
            $table->string('telp_keluarga');
            $table->string('alamat_keluarga');
            $table->string('foto_diri');
            $table->string('berkas_lampiran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
