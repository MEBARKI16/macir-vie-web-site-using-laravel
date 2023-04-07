<?php

namespace App\PagesModels;

use Illuminate\Database\Eloquent\Model;

class AproposModel extends Model
{
    protected $table ="page_apropos";
    protected $fillable=['titre1','paragraph1',
    'titre2','paragraph2','paragraph3',
    'paragraph4','paragraph5',
    'titre3','paragraph6',
    'titre4','paragraph7','titre5','paragraph8'];
}
