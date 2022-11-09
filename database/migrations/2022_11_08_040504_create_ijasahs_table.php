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
        Schema::create('ijasahs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->integer('nis');
            $table->integer('nisn');
            $table->string('nama');
            $table->string('tgl_lahir');
            $table->string('nama_ibu');
            $table->string('thn_lulus');
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
        Schema::dropIfExists('ijasahs');
    }
};
