<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Tenant;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
  public function index()
  {
    $data = Menu::orderBy('sort')->get();
    return view('admin.menus.index', [
      'data' => $data
    ]);
  }

  public function create()
  {
    return view('admin.menus.create');
  }

  public function store(Request $request)
  {
    $request->merge(['token' => str_random(8)]);

    $request->user()->menus()->create($request->all());

    // return redirect()->route('menus.index')->with('msg', 'Menu Cadastrado !');
    return redirect()->route('menus.index');
  }

  public function edit($id)
  {
    $menu = Menu::findOrFail($id);
    $data = Menu::all();
    return view('admin.menus.edit', compact('menu'), compact('data'));
  }

  public function update(Request $request, $id)
  {
    $menu = $request->user()->menus()->findOrFail($id);

    $menu['description'] = $request->description;
    $menu['active'] = $request->active;

    $menu->save();

    $data = Menu::all();
    return view('admin.menus.index', [
      'data' => $data
    ]);
  }

  public function menuItens($menu_id)
  {
    
    $menu = Menu::find($menu_id);

    return view('admin.menus.menu_itens', [
      'menu' => $menu
    ]);
  }

  public function deleteItem($menu, $id)
  {
    try {
      $menu = Menu::find($menu);
      $menu->products()->detach($id);

      return redirect()->back()->with('msg', 'Item do Menu Removido');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Ocorreu um erro: ' . $e->getMessage());
    }
  }

  public function share($id)
  {
    $menu = Menu::find($id);
    return view('admin.menus.share', compact('menu'));
  }

  public function activate($id)
  {
    $menu = Menu::find($id);

    if ($menu->active == 0) {
      $menu->active = 1;
    } else {
      $menu->active = 0;
    }

    if ($menu->save()) {
      return response()->json([
        'success' => true
      ], 200);
    } else {
      return response()->json([
        'success' => false
      ], 400);
    }
  }

  public function addProducts($menu_id)
  {
    $menu = Menu::find($menu_id);
    $products = Product::get()->diff($menu->products);

    return view('admin.menus.add_product', compact('menu', 'products'));
  }

  public function storeProducts($menu_id, $product_id)
  {
    $menu = Menu::find($menu_id);
    $menu->products()->attach([$product_id]);

    return response()->json([
      'success' => true
    ], 200);
  }

  public function deleteProducts($menu_id, $product_id)
  {
    $menu = Menu::find($menu_id);
    $menu->products()->detach([$product_id]);

    return response()->json([
      'success' => true
    ], 200);
  }

  public function getProducts($menu_id)
  {
    $menu = Menu::find($menu_id);

    return response()->json($menu->products()->where('active', true)->get());
  }

  public function getProduct($product_id)
  {
    $product = Product::find($product_id);

    return response()->json($product);
  }

  public function getPromo($promotion_id)
  {
    $promotion = Promotion::find($promotion_id);

    return response()->json($promotion);
  }

  public function link(Request $request)
  {
    if (Tenant::where('token', $request->token)->first()) {
      return redirect()->back()->withInput()->withErrors(['link' => 'Link já cadastrado']);
    }

    $tenant = Auth::user()->tenant()->firstOrFail();
    $tenant->fill($request->only('token'))->save();

    return redirect()->route('panel.index');
  }

  public function sort(Request $request) {

    $sortable = json_decode($request->sort);

    foreach ($sortable as $key => $sort) {
        Menu::where('uuid', $sort)->update(['sort' => $key]);
    }
  }

  public function destroy($id)
  {
    
    $menu = Menu::find($id);
      $menu->delete();      
      return redirect()->route('menus.index');       
  }
}
