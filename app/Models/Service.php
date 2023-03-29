<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\I18n\LocalizableModel;

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
