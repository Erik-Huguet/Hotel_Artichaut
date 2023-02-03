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
        Schema::create('advantages', function (Blueprint $table) {
            $table->id();

            $table->string('title_fr_adv');
            $table->string('describe_fr_adv');
            $table->string('title_ang_adv');
            $table->string('describe_ang_adv');
            $table->string('icon_adv');
            $table->integer('position_icon_adv');
            $table->timestamps();
            $table->foreignId('fk_Users_advantages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advantage');
    }
};
