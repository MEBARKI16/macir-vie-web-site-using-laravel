<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppLang extends Model
{
    protected $table = 'appli_lang';

    protected $fillable = ['lang', 'content'];
}
