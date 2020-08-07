<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Petugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id_petugas');
            $table->string('email_petugas', 50);
            $table->string('nama_petugas', 50);
            $table->string('notel_petugas', 50);
            $table->string('foto_petugas', 50);
            $table->enum('status_petugas', ['SIAP', 'TIDAK SIAP']);
            $table->string('password_petugas', 100);
            $table->string('token')->nullable();
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
        Schema::dropIfExists('petugas');
    }
}
