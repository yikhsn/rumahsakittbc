<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalPasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_pasiens', function (Blueprint $table) {
            $table->engine = 'InnoDB';            
            $table->increments('id');
            $table->string('nama_jadwal');
            $table->string('color', 7)->nullable();
            $table->date('start');
            $table->date('end');
            $table->integer('is_done')->nullable();
            $table->integer('is_failed')->nullable();
            $table->unsignedInteger('pasien_id');
            $table->timestamps();
        });

        Schema::table('jadwal_pasiens', function(Blueprint $table){
            $table->foreign('pasien_id')
                  ->references('id')
                  ->on('pasiens')
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
        Schema::dropIfExists('jadwal_pasiens');
    }
}
