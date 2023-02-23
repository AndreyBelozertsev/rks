<?php

namespace App\Http\Controllers;

use Domain\Post\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::activeItems()->paginate();
        
        return view('page.post.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::activeItem($slug)->firstOrFail();

        return view('page.post.show', compact('post'));
    }
}
