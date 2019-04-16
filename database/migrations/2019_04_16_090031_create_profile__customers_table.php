<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile__customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user');
            $table->string('nama');
            $table->string('nomor_telephone');
            $table->string('foto');
            $table->string('no_rek');
            $table->string('na_rek');
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
        Schema::dropIfExists('profile__customers');
    }
}
