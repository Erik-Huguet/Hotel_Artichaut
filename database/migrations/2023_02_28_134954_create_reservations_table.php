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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('dateStart');
            $table->dateTime('dateEnd');
            $table->integer('nb_Person');
            $table->integer('totalServices')->nullable();
            $table->foreignId('fk_Reservations_Discounts')->nullable();
            $table->foreignId('fk_Reservation_User')->nullable();
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
};
