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
        Schema::create('pengirimans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaksi_id');
            $table->integer('No_Resi');
            $table->timestamp('tgl_penerimaan');
            $table->integer('ongkos');
            $table->enum('jenis',['JNE EXPRESS','J&T EXPRESS','Ninja EXPRESS','Antar aja']);
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
        Schema::dropIfExists('pengirimen');
    }
};
