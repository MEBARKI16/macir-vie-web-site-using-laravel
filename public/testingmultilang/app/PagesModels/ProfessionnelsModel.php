<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class ProfessionnelsModel extends Model
{
    protected $table ="professionnels";
    protected $fillable=['titre1','paragraph1'];
}
