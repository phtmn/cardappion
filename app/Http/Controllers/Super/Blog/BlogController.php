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
      $post['image']  = $request->image->move('images/posts');
    }

    $this->posts->create($post);

    return redirect()->route('super.blog.index');
  }

  public function edit($id)
  {
    $result = $this->posts->findOrFail($id);

    return view('super.blog.edit', compact('result'));
  }

  public function update(Request $request, $id)
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

    $result = $this->posts->findOrFail($id);

    if ($request->hasFile('image')) {
      $post['image']  = $request->image->move('posts');
    }

    $result->fill($post)->save();

    return redirect()->route('super.blog.index');
  }

  public function destroy(Request $request, $id)
  {
    if ($request->ajax()) {

      $result = $this->posts->findOrFail($id);

      if ($result) {
        $result->delete();
        return response()->json(['success' => true, 'message' => 'Post removido com sucesso.'], 200);
      } else {
        return response()->json(['success' => false, 'message' => 'Post não encontrado.'], 400);
      }
    }

    return redirect()->back();
  }
}
