<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
	public $newsArray = [
		[
			'title' => 'News title 1',
			'text' => 'News text 1',
		],
		[
			'title' => 'News title 2',
			'text' => 'News text 2',
		],
		[
			'title' => 'News title 3',
			'text' => 'News text 3',
		],
	];

	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach( $this->newsArray as $news ) {
            DB::table('news')->insert($news);
        }
	}
}