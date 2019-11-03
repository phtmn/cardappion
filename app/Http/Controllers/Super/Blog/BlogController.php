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
    $posts = $this->posts->get();

    return view('super.blog.index', compact('posts'));
  }

  public function create()
  {
    return view('super.blog.create');
  }

  public function store(Request $request)
  {
    $post = $request->all();

    $validate = validator($request->all(), [
      'category' => 'nullable',
      'title'    => 'required|max:255',
      'subtitle' => 'nullable|max:255',
      'body'     => 'required',
      'image'    => 'nullable|image|max:2000',
    ]);

    if ($validate->fails()) {
      return redirect()->back()->withInput()->withErrors($validate->getMessageBag());
    }

    if ($request->hasFile('image')) {
      $post['image']  = $request->image->move('posts');
    }

    $this->posts->create($post);

    return redirect()->route('super.blog.index');
  }
}
