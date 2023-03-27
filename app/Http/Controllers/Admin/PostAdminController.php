<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;

class PostAdminController extends Controller
{
    // страница «posts/»
    public function index()
    {
        return view('admin.posts.index', ['posts' => Post::all()]);
    }



    public function show(string $id)
    {
        return view('admin.posts.show', ['post' => Post::findOrFail($id)]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create', ['post' => [
            'title' => '',
            'text' => '',
        ]]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        Post::create($request->all());

        return redirect()->route('posts.index')->with('success', 'posts created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.posts.edit', ['post' => Post::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'posts updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'posts deleted successfully');
    }
}
