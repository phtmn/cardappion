<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use auth;
use Illuminate\Support\Facades\Storage;

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

      
      if ($request->hasFile('image1') && $request->file('image1')->isValid()) {      
        $product['image1']  = $request->image1->store('images/products');
      }

      if ($request->hasFile('image2') && $request->file('image2')->isValid()) {      
        $product['image2']  = $request->image2->store('images/products');
      }

      if ($request->hasFile('image3') && $request->file('image3')->isValid()) {      
        $product['image3']  = $request->image3->store('images/products');
      }

      if ($request->price) {

        // $promotion['promotion_value'] = $request->promotion_value;
        // $product['price'] = str_replace(',', '.', str_replace('.', '', $request->price));
      }

      Product::create($product);

      return redirect()->route('products.index')->with('msg', 'Produto adicionado com Sucesso!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Ocorreu um Erro: ' . $e->getMessage());
    }
  }
  
  public function edit($id)
  {
    $product = Product::findOrFail($id);
    return view('admin.products.edit', compact('product'));
  }

  public function update(Request $request, $id)
  {
    $product = Product::findOrFail($id);
    $dados = $request->all();

    if($product)
    {

      $productImage1 = $product->image1;
      $productImage2 = $product->image2;
      $productImage3 = $product->image3;

      if ($request->hasFile('image1') && $request->file('image1')->isValid()) {
        if ($productImage1) {
            Storage::delete($productImage1);
        }
        $productImage1 = $request->image1->store('images/products');
      }

      if ($request->hasFile('image2') && $request->file('image2')->isValid()) {
        if ($productImage2) {
            Storage::delete($productImage2);
        }
        $productImage2 = $request->image2->store('images/products');
      }

      if ($request->hasFile('image3') && $request->file('image3')->isValid()) {
        if ($productImage3) {
            Storage::delete($productImage3);
        }
        $productImage3 = $request->image3->store('images/products');
      }
    }

    // $dados['title'] = $request->title;
    // $dados['price'] = $request->price;
    // $dados['details'] = $request->details;
    // // $dados['user_id']   = Auth()->user()->id;
    $dados['image1'] = $productImage1;
    $dados['image2'] = $productImage2;
    $dados['image3'] = $productImage3;

    $product->update($dados);

    // $product->save();:

    return redirect()->route('products.index');
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

  public function destroy($id)
    {

      $products = Product::find($id);
        $products->delete();

        return redirect()->route('products.index');

      // $id->delete();
      //   return redirect()->route('products.index');
    }
    
}
