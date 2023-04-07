<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class AssuranceVoyageParticuliersModel extends Model
{
    protected $table ="asuurance_voyage_particuliers";
    protected $fillable=['paragraph1','titre1','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titreBox3','paragraphBox3','titre2','sous_titre1','sous_titre2','sous_titre3'];
}
