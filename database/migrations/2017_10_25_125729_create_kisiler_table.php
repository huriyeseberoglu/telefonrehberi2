<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKisilerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kisiler', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adi');
            $table->string('soyadi');
            $table->string('telefon');
            $table->string('adres');
            $table->string('email');
            $table->string('resim');
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
        Schema::drop('kisiler');
    }
}
