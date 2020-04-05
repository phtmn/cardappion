<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use App\Models\User;
use App\Models\Tenant;

class ConfigController extends Controller
{
  public function createEdit()
  {
    $config = auth()->user()->config();
    if ($config) {
      return view('admin.config.edit', [
        'config' => $config
      ]);
    } else {
      return view('admin.config.create');
    }
  }

  public function store(Request $request)
  {
    // if ($request->hasFile('image')) {
    //     $image = $request->image->store('images/logos');
    // }

    if ($request->hasFile('image') && $request->file('image')->isValid() ) {
      $image = $request->image->store('images/logos');
   }

    if($request->has('tenant_name')){      
      $tenant = Tenant::find(auth()->user()->tenant->id);
      // dd($tenant);
      $tenant->name = $request->tenant_name ?: $tenant->name;   
      $tenant->save();
   
    }

    if($request->has('user_name')){
      $user = User::find(auth()->user()->id);
      $user->name = $request->user_name ?: $user->name;
      $user->save();
    }

    // dd($request->all());
    $config = Config::UpdateOrCreate(
        ['user_id' => auth()->user()->id],
        [
           'image'         => isset($image) ? $image : null,
            // 'name'          => $request->name,
            // 'docnumber'     => $request->docnumber,
            'delivery'      => $request->delivery,
            'zipcode'       => $request->zipcode,
            'address'       => $request->address,
            'neighborhood'  => $request->neighborhood,
            'city'          => $request->city,
            'us'            => $request->us,
            // 'telephone'     => $request->telephone,            
            'whatsapp'      => $request->whatsapp,
            'telegram'     => $request->telegram,
            'site'          => $request->site,
            'instagram'     => $request->instagram,
            'fanpage'       => $request->fanpage,
            'details'       => $request->details,
            'user_id'       => auth()->user()->id
        ]
    );

    if ($config) {
        return redirect()->route('config.createEdit')->with('msg', 'Dados armazenados com sucesso!');
    }
  }
}
