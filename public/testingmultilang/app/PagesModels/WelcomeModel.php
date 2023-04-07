<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class WelcomeModel extends Model
{
    protected $table ="welcome";
    protected $fillable=['titre1','paragraph1',
    'titre2','paragraph2','paragraph3',
    'paragraph4','paragraph5',
    'titre3','titre5',
    'titre4'];
}
