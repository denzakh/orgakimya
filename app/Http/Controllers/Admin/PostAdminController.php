<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::all()]);
    }

    public function show(string $id)
    {
        return view('admin.posts.show', ['post' => Post::findOrFail($id)]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'posts created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.posts.edit', ['post' => Post::findOrFail($id)]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title_en' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'posts updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'posts deleted successfully');
    }
}
