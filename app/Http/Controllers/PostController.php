<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class PostController extends Controller
{
    public function create(){
        return view('post.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $validated['user_id'] = auth()->id();
        
        $post = Post::create($validated);

        $request->session()->flash('message', '保存しました');
        return back();
    }

    public function index(){
        $posts=Post::all();
        return view('post.index', compact('posts'));
    }
}
