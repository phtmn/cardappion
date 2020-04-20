<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;
use App\Http\Controllers\Controller;
use App\Models\{Tenant, Sale, Itens, Product};
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailUser;
use Auth;

class SaleController extends Controller
{
    public function index(Request $request)
    {
        $tenant = Auth::user()->tenant;
        $sales = $tenant->sales()->orderBy('id', 'DESC')->get();

        return view('admin.sale.index', compact('sales'));
    }

    public function store(Request $request)
    {
        if($request->ajax()){

            $tenant = Tenant::where('token', $request->token)->first();
            $userId = $tenant->id;

            $record = $tenant->sales()->latest()->first();
            if ($record) {
                $expNum = explode('-', ($record->invoice_number == 0) ? date('Y').'-000000' : $record->invoice_number);
            } else {
                $expNum[1] = '000000';
            }

            $invoice_number = date('Y').'-'.sprintf("%06d", $expNum[1]+1);

            if ($tenant) {
                $sale = $tenant->sales()->create($request->except('items'));

                $sale->delivery = ($tenant->config) ? $tenant->config->delivery : '0.00';
                $sale->status   = 1;
                $sale->total    = \Cart::session($userId)->getTotal();
                $sale->invoice_number = $invoice_number;
                $sale->save();

                foreach($request->get('items') as $item) {
                    $product = Product::find($item['product']);

                    $sale->items()->create([
                        'tenant_id'  => $tenant->id,
                        'product_id' => $item['product'],
                        'price'      => $product->price,
                        'quantity'   => $item['quantity']
                    ]);
                }

                \Cart::session($userId)->clear();

                $user = $tenant->users()->first();
                Mail::to($user->email)->queue(new SendMailUser($user));

                return response(array(
                    'success'  => true,
                    'message'  => "Pedido efetuado com sucesso, aguarde que entraremos em contato!",
                    'redirect' => route('site.menu.show', ['token' => $request->token]),
                    'time'     => 4000 // milisegundos
                ), 200,[]);
            }

            return response(array(
                'success' => false,
                'message' => "error."
            ), 400,[]);
        }

        return response(array(
            'success' => false,
            'message' => "error."
        ), 400,[]);
    }

    public function update(Request $request, $uuid)
    {
        $sale = Sale::where('uuid', $uuid)->firstOrFail();
        $sale->status = $request->status;
        $sale->save();

        return response(array(
            'success' => true,
            'message' => "success"
        ), 200,[]);
    }

}
