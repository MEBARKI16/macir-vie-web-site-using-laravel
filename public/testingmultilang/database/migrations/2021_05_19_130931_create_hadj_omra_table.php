<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHadjOmraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hadj_omra', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_big')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('titre_image')->nullable();
            $table->text('paragraph1');
            $table->string('titre2');
            $table->text('paragraph2');
            $table->string('image')->nullable();
            $table->text('paragraph3');
            $table->text('sous_paragraph11');
            $table->text('sous_paragraph12');
            $table->text('sous_paragraph13');
            $table->text('sous_paragraph14');
            $table->text('sous_paragraph15');
            $table->text('sous_paragraph16');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hadj_omra');
    }
}
