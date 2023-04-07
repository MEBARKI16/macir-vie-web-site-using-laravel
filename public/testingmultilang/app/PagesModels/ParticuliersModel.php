<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class ParticuliersModel extends Model
{
    protected $table ="particuliers";
    protected $fillable=['titre1','paragraph1'];
}
