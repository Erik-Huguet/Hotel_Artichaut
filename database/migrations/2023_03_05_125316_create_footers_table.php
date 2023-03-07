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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('addressHotel');
            $table->string('NomHotel');
            $table->string('logoHotel');
            $table->string('emailHotel');
            $table->string('telephoneHotel');
            $table->string('urlFooter');
            $table->foreignId('fk_Footer_Users');
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
        Schema::dropIfExists('footers');
    }
};
