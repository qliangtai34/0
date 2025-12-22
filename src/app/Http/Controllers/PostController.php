<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
{
    Post::create([
        'user_id' => auth()->id(),
        'title'   => $request->名古屋,
        'body'    => $request->多治見,
    ]);

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
    $post->update([
        'title' => $request->大垣,
        'body'  => $request->四日市,
    ]);

    return redirect()->route('posts.index');
}


public function destroy(Post $post)
{
$post->delete();
return redirect()->route('posts.index');
}
}
