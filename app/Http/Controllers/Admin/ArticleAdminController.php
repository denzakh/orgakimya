<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleAdminController extends Controller
{
    public function index()
    {
        return view('admin.articles.index', ['articles' => Article::all()]);
    }

    public function show(string $id)
    {
        return view('admin.articles.show', ['article' => Article::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        Article::create($data);

        return redirect()->route('articles.index')->with('success', 'articles created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.articles.edit', ['article' => Article::findOrFail($id)]);
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $data = $this->getAllData($request);

        $article->update($data);

        return redirect()->route('articles.index')->with('success', 'articles updated successfully');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')
            ->with('success', 'articles deleted successfully');
    }

    private function getAllData(Request $request) {

        $data = $request->all();

        // save img
        if(isset($data['file-img']) && $data['file-img']) {
            $fileObj = $data['file-img'];

            $options = [
                'files' => [$fileObj],
                'sizes' => [
                    'normal' => 1200,
                    'thumbnail' => 640,
                ],
                'catalog' => 'articles',
                'isWebp' => true,
                'quality' => 75, 
            ];

            $result = [];

            if (function_exists('create_sized_images')) {
                $result = create_sized_images($options);
                $data['img'] = $result[0]['title'];               
            }
        }

        // save doc
        if(isset($data['file-doc']) && $data['file-doc']) {
            $fileObj = $data['file-doc'];

            $options = [
                'files' => [$fileObj],
                'catalog' => 'articles',
            ];

            $result = [];

            if (function_exists('save_doc_helper')) {
                $result = save_doc_helper($options);
                $data['doc'] = $result[0]['title'];               
            }
        }

        return $data;
    }
}
