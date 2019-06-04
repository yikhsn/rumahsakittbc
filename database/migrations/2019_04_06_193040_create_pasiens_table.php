<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->string('agama');
            $table->string('nik');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('hubungan_pasien');
            $table->string('jenis_kelamin');
            $table->dateTime('tanggal_lahir');
            $table->string('email');
            $table->string('password');
            $table->string('hasil_sputum')->nullable();
            $table->integer('jumlah_sputum')->nullable();
            $table->string('pengobatan_satu_bulan')->nullable();
            $table->string('catatan_kesehatan')->nullable();
            $table->unsignedInteger('kecamatan_id')->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->unsignedInteger('jenis_penyakit_id')->nullable();
            $table->string('pendamping_nik')->nullable();
            $table->unsignedInteger('dokter_id')->nullable();
            $table->unsignedInteger('rumahsakit_id')->nullable();
            $table->unsignedInteger('evaluasi_id')->nullable();
            $table->boolean('is_done')->nullable();
            $table->timestamps();
        });

        Schema::table('pasiens', function(Blueprint $table){
            $table->foreign('kecamatan_id')
                  ->references('id')
                  ->on('kecamatans')
                  ->onDelete('cascade');
            $table->foreign('jenis_penyakit_id')
                  ->references('id')
                  ->on('jenis_penyakits')
                  ->onDelete('cascade');
            $table->foreign('type_id')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade');
            $table->foreign('pendamping_nik')
                  ->references('nik')
                  ->on('pendampings')
                  ->onDelete('cascade');
            $table->foreign('dokter_id')
                  ->references('id')
                  ->on('dokters')
                  ->onDelete('cascade');
            $table->foreign('rumahsakit_id')
                  ->references('id')
                  ->on('rumahsakits')
                  ->onDelete('cascade');
            $table->foreign('evaluasi_id')
                  ->references('id')
                  ->on('evaluasis')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasiens');
    }
}