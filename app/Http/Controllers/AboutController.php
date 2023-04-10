<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Page;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
        	'partners' => Partner::all(),
        	'page' =>  Page::findOrFail(2)->toArray(),
        ]);
    }
}
