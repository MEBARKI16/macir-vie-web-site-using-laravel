<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class agenceVoyageModel extends Model
{
    protected $table ="page_agence_voyage";
    protected $fillable=['titre1','paragraph1','titre2','titreBox1','paragraphBox1','titreBox2','paragraphBox2'];
}
