<?php

namespace App\Http\Controllers\Site;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function home(){
        return view('layouts.site3');
    }

    public function promocao($slug){

        $promotion = Promotion::where('url','=',$slug)->first();
        //dd($promotion);
        return view('client.promotion', compact('promotion'));
    }

    public function menu($slug)
    {

        return view('client.menu',[
            'promotions'    => Promotion::all(),
            'menu'          => Menu::where('slug','=',$slug)->first(),
            'categories'    => ProductCategory::all()
        ]);

    }

    public function productDetail($id){
        $product = Product::find($id);
        return view('client.productDetail',compact('product'));
    }
}
