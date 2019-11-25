<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Super\Post\Post;

class BlogController extends Controller
{
  public function index()
  {
    $posts = Post::actived()->get();

    return view('site.blog.index', compact('posts'));
  }

  public function show($slug)
  {
    
    $posts = Post::actived()->get();
    $post = Post::actived()->where('slug', $slug)->firstOrFail();

    return view('site.blog.show', compact('post'), compact('posts'));
  }

  

}
