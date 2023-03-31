<?php

namespace App\Models;

use App\I18n\LocalizableModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends LocalizableModel
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_tr',
        'title_ru',
        'text_en',
        'text_tr',
        'text_ru',
        'img',
    ];

    protected $localizable = [
        'title',
        'text',
        'img',
    ];
}
