<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class CreditParticuliersModel extends Model
{
    protected $table ="credit_particuliers";
    protected $fillable=['paragraph1','titre2','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titre3','paragraph2'];
}
