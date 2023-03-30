<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
	public $items = [
		[
			'title' => 'Anadolu Cam Yenişehir Fabrikası',
			'img' => '1',
		],
		[
			'title' => 'Akdeniz Chemson',
			'img' => '2',
		],
		[
			'title' => 'Alemdar Cargill',
			'img' => '3',
		],
		[
			'title' => 'Atermit',
			'img' => '4',
		],
		[
			'title' => 'Biovento Organik',
			'img' => '5',
		],
		[
			'title' => 'By Petrokimya',
			'img' => '6',
		],
		[
			'title' => 'Colgate Palmolive',
			'img' => '7',
		],
		[
			'title' => 'Fosroc Yapı Kimyasalları',
			'img' => '8',
		],
		[
			'title' => 'Likit Kimya',
			'img' => '9',
		],
		[
			'title' => 'Mapa Otomotiv',
			'img' => '10',
		],
		[
			'title' => 'Maret',
			'img' => '11',
		],
		[
			'title' => 'MMK Metalurji',
			'img' => '12',
		],
		[
			'title' => 'Parkcam',
			'img' => '13',
		],
		[
			'title' => 'Plastifay',
			'img' => '14',
		],
		[
			'title' => 'SZ Metal',
			'img' => '15',
		],
		[
			'title' => 'Targid Gıda',
			'img' => '16',
		],
		[
			'title' => 'Turkuaz Polyester',
			'img' => '17',
		],
		[
			'title' => 'Vatan Plastik',
			'img' => '18',
		],
		[
			'title' => 'Namet',
			'img' => '19',
		],

	];

	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach( $this->items as $item ) {
            DB::table('partners')->insert($item);
        }
	}
}


