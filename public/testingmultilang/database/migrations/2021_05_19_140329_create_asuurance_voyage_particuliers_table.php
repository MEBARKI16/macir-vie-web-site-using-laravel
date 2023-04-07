<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsuuranceVoyageParticuliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asuurance_voyage_particuliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image_big')->nullable();
            $table->string('image_medium')->nullable();
            $table->string('image_small')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('titre_image')->nullable();
            $table->text('paragraph1');
            $table->string('titre1');
            $table->string('sous_titre1');
            $table->string('sous_titre2');
            $table->string('sous_titre3');
            $table->string('titre2');
            $table->string('image')->nullable();
            $table->string('titreBox1');
            $table->text('paragraphBox1');
            $table->string('titreBox2');
            $table->text('paragraphBox2');
            $table->string('titreBox3');
            $table->text('paragraphBox3');
            $table->text('sous_paragraph11');
            $table->text('sous_paragraph12');
            $table->text('sous_paragraph13');
            $table->text('sous_paragraph14');
            $table->text('sous_paragraph21');
            $table->text('sous_paragraph22');
            $table->text('sous_paragraph23');
            $table->text('sous_paragraph24');
            $table->text('sous_paragraph25');
            $table->text('sous_paragraph31');
            $table->text('sous_paragraph32');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asuurance_voyage_particuliers');
    }
}
