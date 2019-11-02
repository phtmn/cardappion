<?php

namespace App\Http\Controllers\Super\Blog;

use App\Http\Controllers\Super\BaseController;
use Illuminate\Http\Request;
use App\Models\Super\Post\Post;

class BlogController extends BaseController
{
  private $posts;

  public function __construct(Post $post)
  {
    $this->posts = $post;
  }

  public function index()
  {
    return view('super.blog.index');
  }

  public function create()
  {
    return view('super.blog.create');
  }

  public function store(Request $request)
  {
    $validate = validator($request->all(), [
      'category' => 'nullable',
      'title'    => 'required|max:255',
      'subtitle' => 'nullable|max:255',
      'body'     => 'required',
      'image'    => 'nullable|image|max:2000',
    ]);

    // If fails validate
    if ($validate->fails()) {
      return redirect()->back()->withInput()->withErrors($validate->getMessageBag());
    }
  }
}
