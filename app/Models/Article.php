<?php

namespace App\Models;

use App\I18n\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends LocalizableModel 
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_tr',
        'title_ru',
        'img',
        'doc',
    ];

    protected $localizable = [
        'title',
    ];
}
