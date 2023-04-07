<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class AssuranceGroupProModel extends Model
{
    protected $table ="assurance_group";
    protected $fillable=['paragraph1','titre1','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titreBox3','paragraphBox3','titre2','sous_titre1','sous_titre2','sous_titre3','paragraph2','paragraph3','paragraph4','paragraph5'];
}
