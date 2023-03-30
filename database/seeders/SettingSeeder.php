<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{

	public $item = [
		'firm' => 'Orga Kimya',
		'site' => 'www.orgakimya.com',
		'email1' => 'kkcalis@orgakimya.com',
		'email2' => 'info@orgakimya.com',
		'address1' => 'Altayçeşme Mh. Çamlı Sk. No: 16',
		'address2' => 'DAP Royal Center A Blok Kat: 10 D: 45',
		'coord1' => '40.935626, 29.134579',
		'coord2' => '40.91457863679844, 29.187747369256336',
		'city' => 'İstanbul',
		'district' => 'Maltepe',
		'phone1' => '+90 216 909 88 17',
		'phone2' => '+90 532 788 39 83',
		'fax' => '+90 216 939 99 18',
		'linkedin1' => 'https://tr.linkedin.com/in/orga-kimya-m%C3%BChendislik-a50a76142',
		'linkedin2' => 'https://tr.linkedin.com/in/kadir-kutay-%C3%A7al%C4%B1%C5%9F-a2910029'
	];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert($this->item);
    }
}
