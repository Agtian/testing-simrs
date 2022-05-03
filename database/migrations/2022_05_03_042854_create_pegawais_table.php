<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gol_pegawai_id')->constrained('gol_pegawais');
            $table->foreignId('status_nikah_id')->constrained('status_nikahs');
            $table->foreignId('status_pegawai_id')->constrained('status_pegawais');
            $table->foreignId('agama_id')->constrained('agamas');
            $table->foreignId('unit_kerja_id')->constrained('unit_kerjas');
            $table->foreignId('jenjang_pendidikan_id')->constrained('jenjang_pendidikans');
            $table->foreignId('jabatan_pegawai_id')->constrained('jabatan_pegawais');
            $table->string('nip');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('gelar_depan');
            $table->string('gelar_belakang');
            $table->date('tgl_lahir');
            $table->string('tempat_lahir');
            $table->enum('jns_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_hp');
            $table->date('tmt_kerja');
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
        Schema::dropIfExists('pegawais');
    }
}
