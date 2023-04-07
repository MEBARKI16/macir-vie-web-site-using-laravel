<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAproposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_apropos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_big')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('titre1');
            $table->text('paragraph1');
            $table->string('titre2');
            $table->text('paragraph2');
            $table->text('paragraph3');
            $table->text('paragraph4');
            $table->text('paragraph5');
            $table->text('titre3');
            $table->text('paragraph6');
            $table->text('titre4');
            $table->text('paragraph7');
            $table->text('titre5');
            $table->text('paragraph8');
            $table->string('smallImage1')->nullable();
            $table->string('smallImage2')->nullable();
            $table->string('smallImage3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_apropos');
    }
}
