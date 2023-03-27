<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
	public $posts = [
		[
			'title' => 'posts title 1',
			'text' => 'posts text 1',
		],
		[
			'title' => 'posts title 2',
			'text' => 'posts text 2',
		],
		[
			'title' => 'posts title 3',
			'text' => 'posts text 3',
		],
	];

	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		foreach( $this->posts as $post ) {
            DB::table('posts')->insert($post);
        }
	}
}