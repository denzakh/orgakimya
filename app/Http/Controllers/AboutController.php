<?php

namespace App\Http\Controllers;

use App\Models\Partner;


class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
        	'partners' => Partner::all(),
        ]);
    }
}
