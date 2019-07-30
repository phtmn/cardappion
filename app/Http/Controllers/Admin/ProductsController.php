<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductCategory;
use App\Models\Product;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){

        return view('admin.products.index',[
            'data' => $data = Product::all()
        ]);
    }

    public function create(){

        return view('admin.products.create',[
            'categories' => ProductCategory::all(),
            'menus'      => Menu::all()
        ]);
    }

    public function store(Request $request){

        try{
            $product = $request->all();

            if($request->hasFile('image')){
                $product['image']  = $request->image->store('products');

            }

            $product['active'] = 1;
            Product::create($product);

            return redirect()->back()->with('msg','Produto Inserido Com Sucesso!');
        }catch (\Exception $e){
            return redirect()->back()->with('error','Ocorreu um Erro: '.$e->getMessage());
        }



    }
}
