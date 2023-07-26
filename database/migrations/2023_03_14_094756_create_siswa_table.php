<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // $table->id();
            // timestamps = update at,create at,
            // $table->timestamps();

            // membuat kolom bar
            // $table->string('nama');
            // $table->text('alamat');
            // $table->integer('nomor_hp');
            // $table->id();

            // menentukan uniqe key => nomor induk
            // $table->unique(array('nomor_induk'));
            $table->id();
            $table->text('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->text('kota')->nullable();
            $table->text('provinsi')->nullable();
            $table->text('email')->nullable();
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
        Schema::dropIfExists('siswa');
    }
};
