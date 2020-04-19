<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;
use App\Http\Controllers\Controller;
use App\Models\{Product, Cart, Tenant};

class CartController extends Controller
{
    public function checkout($token)
    {
        $tenant = Tenant::where('token', $token)->first();

        if (!$tenant) return redirect()->route('site');

        $userId = $tenant->id;
        $delivery = $tenant->config->delivery ?? '0.00';

        $items = [];

        \Cart::session($userId)->getContent()->each(function($item) use (&$items) {
            $items[] = $item;
        });

        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name'   => 'Taxa de Entrega',
            'type'   => 'shipping',
            'target' => 'total',
            'value'  => $delivery,
        ));
        \Cart::condition($condition);

        $subtotal  = number_format(\Cart::session($userId)->getSubTotal(), 2, ',', '.');
        $total     = number_format(\Cart::session($userId)->getTotal(), 2, ',', '.');
        $total_qty = \Cart::session($userId)->getTotalQuantity();

        return view('site.m.checkout', compact('items', 'token', 'subtotal', 'total', 'total_qty', 'delivery'));
    }

    public function add(Request $request, $token)
    {
        $userId = Tenant::where('token', $token)->first()->id;

        $product = Product::find($request->id);

        if ($product){
            $id = $product->id;
            $name = $product->title;
            $price = $product->price;
            $qty = $request->quantity;
            $customAttributes = [];
            $associatedModel = $product;

            $item = \Cart::session($userId)->add($id, $name, $price, $qty, $customAttributes, $associatedModel);

            return response(array(
                'success' => true,
                'message' => "Produto adicionado!"
            ),201,[]);
        } else {
            return false;
        }
    }

    public function update(Request $request, $token, $id)
    {
        $userId = Tenant::where('token', $token)->first()->id;

        \Cart::session($userId)->update($id, array('quantity' => $request->op));

        return response(array(
            'success' => true,
            'data'    => $id,
            'message' => "cart item {$id} updated."
        ),200,[]);
    }

    public function delete($token, $id)
    {
        $userId = Tenant::where('token', $token)->first()->id;

        \Cart::session($userId)->remove($id);

        return response(array(
            'success' => true,
            'data'    => $id,
            'message' => "cart item {$id} removed."
        ),200,[]);
    }
}
