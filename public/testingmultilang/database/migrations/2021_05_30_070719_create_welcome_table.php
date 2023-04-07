<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWelcomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('welcome', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titre1');
            $table->text('paragraph1');
            $table->string('titre2');
            $table->text('paragraph2');
            $table->string('titre3');
            $table->text('paragraph3');
            $table->string('titre4');
            $table->text('paragraph4');
            $table->string('titre5');
            $table->text('paragraph5');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('welcome');
    }
}
