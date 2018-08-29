<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuskesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puskesmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kecamatan');
            $table->string('puskesmas');
            $table->string('kode_puskesmas');
            $table->string('kelurahan');
            $table->string('alamat_puskesmas');
            $table->string('tahun_berdiri')->nullable();
            $table->string('no_ijin');
            $table->string('masa_berlaku_ijin');
            $table->boolean('dasar')->nullable();
            $table->boolean('madya')->nullable();
            $table->boolean('utama')->nullable();
            $table->boolean('paripurna')->nullable();
            $table->string('no_penetapan')->nullable();
            $table->string('tgl_penetapan')->nullable();
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('puskesmas');
    }
}
