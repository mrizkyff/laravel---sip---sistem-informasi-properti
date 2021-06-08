<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNullableCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('nama_lengkap')->nullable()->change();
            $table->string('kartu_identitas')->nullable()->change();
            $table->string('no_identitas')->nullable()->change();
            $table->string('alamat_diri')->nullable()->change();
            $table->string('telp_diri')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('gaji')->nullable()->change();
            $table->string('npwp')->nullable()->change();
            $table->string('keterangan_diri')->nullable()->change();
            $table->string('pekerjaan')->nullable()->change();
            $table->string('nama_kantor')->nullable()->change();
            $table->string('alamat_kantor')->nullable()->change();
            $table->string('telp_kantor')->nullable()->change();
            $table->string('keterangan_pekerjaan')->nullable()->change();
            $table->string('status')->nullable()->change();
            $table->string('nama_pasangan')->nullable()->change();
            $table->string('telp_pasangan')->nullable()->change();
            $table->string('pekerjaan_pasangan')->nullable()->change();
            $table->string('alamat_kantor_pasangan')->nullable()->change();
            $table->string('keterangan_pasangan')->nullable()->change();
            $table->string('nama_keluarga')->nullable()->change();
            $table->string('hubungan_keluarga')->nullable()->change();
            $table->string('telp_keluarga')->nullable()->change();
            $table->string('alamat_keluarga')->nullable()->change();
            $table->string('foto_diri')->nullable()->change();
            $table->string('keterangan_keluarga')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
}
