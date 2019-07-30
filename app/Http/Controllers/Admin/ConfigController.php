<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;

class ConfigController extends Controller
{

    public function createEdit(){

        $config = auth()->user()->config();
        if($config){
            return view('admin.config.edit',[
                'config' => $config
            ]);
        }else{
            return view('admin.config.create');
        }

    }

    public function store(Request $request){

        $config = Config::UpdateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'name'          => $request->name,
                'docnumber'     => $request->docnumber,
                'zipcode'       => $request->zipcode,                
                'address'       => $request->address,
                'neighborhood'  => $request->neighborhood,
                'city'          => $request->city,
                'us'            => $request->us,
                'telephone'     => $request->telephone,
                'whatsapp'      => $request->whatsapp,                
                'site'          => $request->site,
                'instagram'     => $request->instagram, 
                'fanpage'       => $request->fanpage,                             
                'user_id'   => auth()->user()->id
            ]
        );

        if($config){
            return redirect()->route('config.createEdit')->with('msg','Dados armazenados com sucesso!');
        }
    }
}
