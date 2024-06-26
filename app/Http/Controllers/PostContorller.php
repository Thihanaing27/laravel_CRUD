<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostContorller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Post::create([
            "title" => $request->title,
            'content' => $request->content,
            'desc' => $request->desc,
        ]);
        return redirect()->route('posts.index')->with('success', 'Post create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::find($id);
        return view("posts.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'desc' => 'required',
        ]);
        Post::find($id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'desc' => $request->desc,
        ]);
        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Post::find($id)->delete();
        return redirect(route('posts.index'))->with('success', 'Post deleted successfully');
    }
}
