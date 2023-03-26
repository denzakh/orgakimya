<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    // страница «news/»
    public function index()
    {
        return view('news.index', ['news' => News::all()]);
    }

    // страница «news/show/2»
    public function show($id)
    {
        return view('news.show', ['news' => News::findOrFail($id)]);
    }
}
