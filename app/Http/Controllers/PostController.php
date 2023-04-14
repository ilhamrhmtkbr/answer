<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('post', ['data' => Post::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(('create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:100',
            'slug' => 'required|unique:tbl_posts',
            'content' => 'required'
        ]);
        Post::create($validatedData);
        return redirect('/post')->with('success', 'create ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('update', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $post->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required'
        ]);

        Post::where('id', $post->id)->update($validatedData);

        return redirect('/post')->with('success', 'update ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
        // Post::destroy($post['id']);

        Post::destroy($post['id']);

        return redirect('/post')->with('success', 'delete ok');
    }
}
