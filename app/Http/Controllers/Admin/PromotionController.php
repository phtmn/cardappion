<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    public function index(){

        return view('admin.promocoes.index',[
            'data' => $data = Promotion::all()
        ]);
    }

    public function create(){
        return view('admin.promocoes.create');
    }

    public function qrCode($id){

        $promocao = Promotion::findOrFail($id);

        return view('admin.promocoes.qrcode',compact('promocao'));
    }

    public function store(Request $request){

        try{
            $promotion          = $request->all();
            $promotion['url']   = Str::random(5);

            if($request->hasFile('image')){
                $promotion['image'] = $request->image->store('promotions');
            }

            Promotion::create($promotion);

            return redirect()->route('promotions.index')->with('msg','Oferta Inserida Com Sucesso!');
        }catch (\Exception $e){
            return redirect()->back()->with('error','Ocorreu um Erro: '.$e->getMessage());
        }

    }
}
