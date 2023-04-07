<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class ProtectionAccidentsModel extends Model
{
    protected $table ="protection_accidents";
    protected $fillable=['paragraph1','titre1','titreBox1','paragraphBox1','titreBox2','paragraphBox2','titre2','paragraph2'];
}
