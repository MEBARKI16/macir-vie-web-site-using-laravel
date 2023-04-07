<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class CreditProModel extends Model
{
    protected $table ="assurance_credit_pro";
    protected $fillable=['paragraph1','titre2','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titre3','paragraph2'];
}
