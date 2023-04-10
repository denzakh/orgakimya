<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    public $pages = [
        [   'parent_id' => 0,
            'slug' => 'home',
            'title_en' => '',
            'title_tr' => '',
            'title_ru' => '',
            'promo_en' => '',
            'promo_tr' => '',
            'promo_ru' => '',
            'content_en' => '',
            'content_tr' => '',
            'content_ru' => '',
            'route_en' => '',
            'route_tr' => '',
            'route_ru' => '',
            'description_en' => 'Water and Waste Water Treatment and Reuse',
            'description_tr' => 'Su / Atık Su Sistemlerinde Arıtma, Şartlandırma ve Geri Kazanım',
            'description_ru' => 'Очистка, кондиционирование и восстановление в системах водоснабжения и канализации',
        ],
        [   'parent_id' => 0,
            'slug' => 'about',
            'title_en' => 'About us',
            'title_tr' => 'Hakkimizda',
            'title_ru' => 'О компании',
            'promo_en' => '',
            'promo_tr' => '',
            'promo_ru' => '',
            'content_en' => '',
            'content_tr' => '',
            'content_ru' => '',
            'route_en' => '',
            'route_tr' => '',
            'route_ru' => '',
            'description_en' => 'We help our customers to reduce their costs related to water & energy & maintenance',
            'description_tr' => 'Müşterilerimize su, enerji, bakım ile ilgili maliyetleri azaltmalarında yardımcı oluyoruz',
            'description_ru' => 'Помогаем нашим клиентам снижать затраты, связанные с водой, энергетикой, техническим обслуживанием',
        ],
        // [   'parent_id' => 0,
        //     'slug' => '',
        //     'title_en' => '',
        //     'title_tr' => '',
        //     'title_ru' => '',
        //     'promo_en' => '',
        //     'promo_tr' => '',
        //     'promo_ru' => '',
        //     'content_en' => '',
        //     'content_tr' => '',
        //     'content_ru' => '',
        //     'route_en' => '',
        //     'route_tr' => '',
        //     'route_ru' => '',
        //     'description_en' => '',
        //     'description_tr' => '',
        //     'description_ru' => '',
        // ],

    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->pages as $page) {
            DB::table('pages')->insert($page);
        }
    }
}
