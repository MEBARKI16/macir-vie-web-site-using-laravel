<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProtectionAccidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protection_accidents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_big')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('titre_image')->nullable();
            $table->text('paragraph1');
            $table->text('paragraph2');
            $table->string('titre1');
            $table->string('titre2');
            $table->string('image')->nullable();
            $table->string('titreBox1');
            $table->text('paragraphBox1');
            $table->string('titreBox2');
            $table->text('paragraphBox2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protection_accidents');
    }
}
