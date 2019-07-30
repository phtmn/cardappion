<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index(){
        $data = Menu::all();
        return view('admin.menus.index',[
            'data' => $data
        ]);
    }

    public function create(){

        return view('admin.menus.create');
    }

    public function store(Request $request){

        $request->user()->menus()
                ->create($request->all());
        return redirect()->route('menus.index')->with('msg','Menu Cadastrado !');
    }

    public function menuItens($menu){

        return view('admin.menus.menu_itens',[
            'menu' => Menu::find($menu)
        ]);
    }

    public function deleteItem($menu,$id){
        try{
            $menu = Menu::find($menu);
            $menu->products()->detach($id);

            return redirect()->back()->with('msg','Item do Menu Removido');
        }catch (\Exception $e){
            return redirect()->back()->with('error','Ocorreu um erro: '.$e->getMessage());
        }

    }

    public function share($id){

        $menu = Menu::find($id);
        return view('admin.menus.share',compact('menu'));


    }
}
