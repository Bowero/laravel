<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // TODO Opdracht 2: Haal alle Posts op uit de database
        $posts = null;

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $image_path = null;
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/images');
        }

        // TODO Opdracht 1: Maak hier een Post aan


        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $image_path = $post->image;
        if ($request->hasFile('image')) {
            $image_path = $request->file('image')->store('public/images');
        }

        // TODO Opdracht 4: Update de Post


        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        // TODO Opdracht 5: Verwijder de Post

        return redirect()->route('posts.index');
    }
}
