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
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home.home');
    }

    public function show($token)
    {
        $tenant = Tenant::where('token', $token)->firstOrFail();

        $config = $tenant->config()->withoutGlobalScopes()->first();

        $categories = $tenant->menus()->where('active', true)->orderBy('sort')->get();

        $products = $tenant->products()->where('active', true)->get();

        // return view('site.m.show', compact('tenant', 'config', 'categories', 'products', 'token'));  
        return view('site.landingPage.index', compact('tenant', 'config', 'categories', 'products', 'token'));        
    }

    public function menu($token)
    {
        $tenant = Tenant::where('token', $token)->firstOrFail();

        $categories = $tenant->menus()->where('active', true)->orderBy('sort')->get();

        $products = $tenant->products()->where('active', true)->get();   
        
      //  return view('site.landingPage.index', compact('tenant', 'categories', 'products', 'token'));  
        // return view('site.m.menu', compact('tenant', 'categories', 'products', 'token'));        
    }

    public function product($token, $id)
    {
        $tenant = Tenant::where('token', $token)->first();

        $product = $tenant->products()->find($id);

        if (!$product) {
            return redirect()->back();
        }
        return view('site.landingPage.product', compact('product', 'tenant', 'token'));
       // return view('site.m.product', compact('product', 'tenant', 'token'));
    }
}
