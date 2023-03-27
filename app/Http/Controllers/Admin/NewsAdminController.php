<?php

namespace App\Http\Controllers\Admin;
use App\Models\News;
use Illuminate\Http\Request;

class NewsAdminController extends Controller
{
    // страница «news/»
    public function index()
    {
        return view('news.index', ['news' => News::all()]);

        // $notes = Note::orderBy('id', 'desc')
        //     ->paginate(2); // Трюк для получения пагинатора
        // return view('news.index')->with('nodes', $nodes);

    }



    // public function show(string $id)
    // {
    //   return view('news.show', ['news' => News::findOrFail($id)]);
    // }




    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     return view('news.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'text' => 'required',
    //     ]);

    //     News::create($request->all());

    //     return redirect()->route('news.index')->with('success','news created successfully.');
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(News $id)
    // {
    //     return view('news.edit', ['news' => News::findOrFail($id)]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, News $news)
    // {
    //     $request->validate([
    //         'title' => 'required',
    //         'text' => 'required',
    //     ]);

    //     $news->update($request->all());

    //     return redirect()->route('news.index')->with('success','News updated successfully');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(News $id)
    // {
    //    $news->delete();

    //    return redirect()->route('news.index')
    //                    ->with('success','news deleted successfully');
    // }
}
