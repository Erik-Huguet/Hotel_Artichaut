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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title_fr_comment',80);
            $table->longText('describe_fr_comment');
            $table->string('title_ang_comment', 80);
            $table->longText('describe_ang_comment');
            $table->integer('rating')->nullable();
            $table->timestamps();
            $table->foreignId('fk_Users_Comments');
            $table->foreignId('fk_Chambers_Comments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
