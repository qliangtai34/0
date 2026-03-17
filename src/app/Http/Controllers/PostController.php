<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class PostController extends Controller
{
    public function index(Request $request)
{
    $query = Post::query();

    // 🔍 キーワード検索
    if ($request->filled('keyword')) {
        $query->where(function ($q) use ($request) {
            $q->where('title', 'like', '%' . $request->keyword . '%')
              ->orWhere('body', 'like', '%' . $request->keyword . '%');
        });
    }

    $posts = $query->with(['user', 'tags'])->latest()->get();


    return view('posts.index', compact('posts'));
}



    public function create()
{
    $tags = Tag::all();
    return view('posts.create', compact('tags'));
}

     public function store(Request $request)
{
    $post = Post::create([
        'user_id' => $request->user()->id,
        'title'   => $request->title,
        'body'    => $request->body,
    ]);

    // 中間テーブル保存
    $post->tags()->sync($request->tags);

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
        'title' => $request->title,
        'body'  => $request->body,
    ]);

    $post->tags()->sync($request->tags);

    return redirect()->route('posts.index');
}


public function destroy(Post $post)
{
$post->delete();
return redirect()->route('posts.index');
}
}
