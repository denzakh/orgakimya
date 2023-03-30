<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
	public $items = [
		[
			'title_en' => 'What is chlorination?',
			'title_tr' => 'Klorlama nedi̇rwhat is chlorination?',
			'title_ru' => 'Что такое хлорирование',
			'img' => '',
			'doc' => 'tr-20220220145232.pdf',
		],
		[
			'title_en' => 'Solid / liquid seperation',
			'title_tr' => 'Kati / sivi ayrişimi',
			'title_ru' => 'Твердое / жидкое разложение',
			'img' => '',
			'doc' => 'tr-20220220145108.pdf',
		],
		[
			'title_en' => 'A general perspective of industrial water treatment',
			'title_tr' => 'Endüstri̇yel su islahina genel bakiş',
			'title_ru' => 'Обзор промышленной рекультивации воды',
			'img' => '',
			'doc' => 'tr-20220220144843.pdf',
		],
		[
			'title_en' => 'Environmental & water pollution',
			'title_tr' => 'Çevre ve su ki̇rli̇li̇ği̇',
			'title_ru' => 'Загрязнение окружающей среды и воды',
			'img' => '',
			'doc' => 'tr-20220220144011.pdf',
		],
		[
			'title_en' => 'Prevention of scale buildup in boilers',
			'title_tr' => 'Buhar kazanlarinda bi̇ri̇ki̇nti̇ oluşumu engellenmesi̇ esaslari',
			'title_ru' => 'Принципы предотвращения образования отложений в паровых котлах',
			'img' => '',
			'doc' => 'tr-20220220143831.pdf',
		],
		[
			'title_en' => 'How to manage blowdown operations in steam boilers',
			'title_tr' => 'Buhar kazanlarinda blöf nasil yapilir',
			'title_ru' => 'Лак блефовать в паровых котлах',
			'img' => '',
			'doc' => 'tr-20220220143439.pdf',
		],
		[
			'title_en' => 'Paint detackification and treatment concepts',
			'title_tr' => 'Boya kabi̇nleri̇ ki̇myasal şartlandirmasi',
			'title_ru' => 'Химическое кондиционирование лакокрасочных покрытий',
			'img' => '',
			'doc' => 'tr-20220204152553.pdf',
		],
		[
			'title_en' => 'Basics of waste water treatment',
			'title_tr' => 'Atik su aritma temel esaslari',
			'title_ru' => 'Основные принципы очистки сточных вод',
			'img' => '',
			'doc' => 'tr-20220204152403.pdf',
		],
	];

	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach( $this->items as $item ) {
            DB::table('articles')->insert($item);
        }
	}
}



