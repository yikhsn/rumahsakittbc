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
            $table->integer('usia');
            $table->string('agama');
            $table->string('nik');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->unsignedInteger('kecamatan_id');
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('jenis_penyakit_id');
            $table->unsignedInteger('pendamping_id');
            $table->unsignedInteger('dokter_id');
            $table->unsignedInteger('rumah_sakit_id');
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
            $table->foreign('pendamping_id')
                  ->references('id')
                  ->on('pendampings')
                  ->onDelete('cascade');
            $table->foreign('dokter_id')
                  ->references('id')
                  ->on('dokters')
                  ->onDelete('cascade');
            $table->foreign('rumah_sakit_id')
                  ->references('id')
                  ->on('rumahsakits')
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