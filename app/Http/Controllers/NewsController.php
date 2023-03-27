<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // страница «news/»
    public function index()
    {
        // return view('news.index', ['news' => News::all()]);

        $news = News::orderBy('id', 'desc')
            ->paginate(10); // Трюк для получения пагинатора
        return view('news.index')->with('news', $news);

    }


    public function show(string $id)
    {
      return view('news.show', ['news' => News::findOrFail($id)]);
    }

}
