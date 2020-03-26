<?php

namespace App\Http\Controllers\Site;

use Auth;
use App\Models\Menu;
use App\Models\Tenant;
use App\Models\Config;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
  public function home()
  {
    return view('site.home.home');
  }

  // public function promocao($slug)
  // {

  //   $promotion = Promotion::where('url', '=', $slug)->first();
  //   //dd($promotion);
  //   return view('client.promotion', compact('promotion'));
  // }

  public function promo($slug)
  {

    $promotion = Promotion::where('url', '=', $slug)->first();
    //dd($promotion);
    return view('client.promotion', compact('promotion'));
  }

  public function produto($slug)
  {

    $product = Product::where('url', '=', $slug)->first();
    //dd($promotion);
    return view('client.product', compact('product'));
  }

  public function detalhe_promocao2($slug)
  {

    $promotion = Promotion::where('url', '=', $slug)->first();
    //dd($promotion);
    return response()->json($promotion);

    // return view('client.promotion', compact('promotion'));
  }

  public function detalhe_promocao($token)
  {

    $tenant = Tenant::where('token', $token)->firstOrFail();
    // $promotions = $tenant->promotions()->where('active', true)->get();
    $promotion = Promotion::where('url', '=', $token)->first();
    //dd($promotion);
    return response()->json($promotion);

    // return view('client.promotion', compact('promotion'));
  }

  public function menu($slug)
  {

    return view('client.menu', [
      'promotions'    => Promotion::all(),
      'menu'          => Menu::where('slug', '=', $slug)->first(),
      'categories'    => ProductCategory::all()
    ]);
  }

  public function productDetail($id)
  {
    $product = Product::find($id);
    return view('client.productDetail', compact('product'));
  }

  public function show($token)
  {
    $tenant = Tenant::where('token', $token)->firstOrFail();

    $config = $tenant->config()->withoutGlobalScopes()->first();

    $categories = $tenant->menus()->where('active', true)->get();

    $products = $tenant->products()->where('active', true)->get();

    $promotions = $tenant->promotions()->where('active', true)->get();

    return view('site.show_argon', compact('tenant', 'config', 'categories', 'products', 'promotions'));
    // return view('site.show', compact('tenant', 'config', 'categories', 'promotions'));
  }
}
