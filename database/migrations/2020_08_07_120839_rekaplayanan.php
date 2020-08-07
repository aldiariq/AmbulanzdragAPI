<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rekaplayanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekaplayanan', function (Blueprint $table) {
            $table->increments('id_rekaplayanan');
            $table->integer('id_petugas')->unsigned();
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_pengguna')->unsigned();
            $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tgl_mulailayanan');
            $table->date('tgl_selesailayanan');
            $table->enum('status_rekaplayanan', ['SIAP', 'TIDAK SIAP']);
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
        Schema::dropIfExists('rekaplayanan');
    }
}
