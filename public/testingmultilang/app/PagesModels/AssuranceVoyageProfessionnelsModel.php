<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class AssuranceVoyageProfessionnelsModel extends Model
{
    protected $table ="assurance_voyage_pro";
    protected $fillable=['paragraph1','titre1','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titreBox3','paragraphBox3','titre2'];
}
