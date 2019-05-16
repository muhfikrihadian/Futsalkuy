<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lapangan');
            $table->string('nama_mitra');
            $table->string('nama_customer');
            $table->string('nama_rekening');
            $table->string('nomor_rekening');
            $table->string('jam');
            $table->string('bukti_transfer');
            $table->enum('status', ['Proses','Terbooking','Selesai']);
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
        Schema::dropIfExists('reservations');
    }
}
