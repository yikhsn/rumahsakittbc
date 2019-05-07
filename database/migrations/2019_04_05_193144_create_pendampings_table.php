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
            $table->increments('id');
            $table->string('nama');
            $table->integer('usia');
            $table->string('nik');
            $table->string('no_telepon');
            $table->string('alamat');
            $table->unsignedInteger('kecamatan_id')->nullable();
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
