<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
  public function index()
  {

    return view('admin.products.index', [
      'data' => $data = Product::all()
    ]);
  }

  public function create()
  {
    return view('admin.products.create');
  }

  public function store(Request $request)
  {
    try {
      $product = $request->all();
      // $product['url']   = Str::random(5);

      if ($request->hasFile('image')) {
        $product['image']  = $request->image->move('products');
      }

      Product::create($product);

      return redirect()->route('products.index')->with('msg', 'Produto adicionado com Sucesso!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Ocorreu um Erro: ' . $e->getMessage());
    }
  }

  public function activate($id)
  {
    $product = Product::find($id);

    if ($product->active == 0) {
      $product->active = 1;
    } else {
      $product->active = 0;
    }

    if ($product->save()) {
      return response()->json([
        'success' => true
      ], 200);
    } else {
      return response()->json([
        'success' => false
      ], 400);
    }
  }
}
