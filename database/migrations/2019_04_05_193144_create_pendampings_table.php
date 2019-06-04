<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendampingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendampings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('nik')->primary;
            $table->string('nama');
            $table->integer('usia');
            $table->string('no_telepon');
            $table->string('hubungan_pasien');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->unsignedInteger('kecamatan_id')->nullable();
            $table->string('alamat');
            $table->timestamps();
        });

        Schema::table('pendampings', function(Blueprint $table){
            $table->foreign('kecamatan_id')
                  ->references('id')
                  ->on('kecamatans')
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
        Schema::dropIfExists('pendampings');
    }
}
