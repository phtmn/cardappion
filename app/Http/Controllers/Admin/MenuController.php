<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
  public function index()
  {
    $data = Menu::all();
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

    $request->user()->menus()
      ->create($request->all());
    return redirect()->route('menus.index')->with('msg', 'Menu Cadastrado !');
  }

  public function menuItens($menu)
  {

    return view('admin.menus.menu_itens', [
      'menu' => Menu::find($menu)
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
}
