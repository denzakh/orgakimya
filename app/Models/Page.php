<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\I18n\LocalizableModel;

class Page extends LocalizableModel
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'slug',
        'title_en',
        'title_tr',
        'title_ru',
        'promo_en',
        'promo_tr',
        'promo_ru',
        'content_en',
        'content_tr',
        'content_ru',
        'route_en',
        'route_tr',
        'route_ru',
        'description_en',
        'description_tr',
        'description_ru',
    ];

    protected $localizable = [
        'title',
        'promo',
        'content',
        'route',
        'description',
    ];

    public function subcategory()
    {
        return $this->hasMany('App\Page', 'parent_id');
    }
}
