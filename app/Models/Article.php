<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
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
