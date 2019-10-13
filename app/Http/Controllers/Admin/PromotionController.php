<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
  public function index()
  {

    return view('admin.promocoes.index', [
      'data' => $data = Promotion::all()
    ]);
  }

  public function create()
  {
    return view('admin.promocoes.create');
  }

  public function qrCode($id)
  {
    $promocao = Promotion::findOrFail($id);

    return view('admin.promocoes.qrcode', compact('promocao'));
  }

  public function store(Request $request)
  {

    try {
      $promotion          = $request->all();
      $promotion['url']   = Str::random(5);


      if ($request->hasFile('image')) {
        $promotion['image'] = $request->image->move('promotions');
      }

      if ($request->promotion_value) {

        // $promotion['promotion_value'] = $request->promotion_value;
        $promotion['promotion_value'] = str_replace(',', '.', str_replace('.', '', $request->promotion_value));
      }
      // dd($request->all());
      Promotion::create($promotion);

      return redirect()->route('promotions.index')->with('msg', 'Promoção adicionada com Sucesso!');
    } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Ocorreu um Erro: ' . $e->getMessage());
    }
  }

  public function edit($id)
  {
    $promotion = Promotion::findOrFail($id);

    return view('admin.promocoes.edit', compact('promotion'));
  }

  public function update(Request $request, $id)
  {
    $promotion = Promotion::findOrFail($id);

    if ($request->hasFile('image')) {
      $promotion['image'] = $request->image->move('promotions');
    }

    $promotion['title'] = $request->title;
    $promotion['promotion_value'] = $request->promotion_value;
    $promotion['details'] = $request->details;

    $promotion->save();

    return redirect()->route('promotions.index');
  }

  public function activate($id)
  {
    $promotion = Promotion::find($id);

    if ($promotion->active == 0) {
      $promotion->active = 1;
    } else {
      $promotion->active = 0;
    }

    if ($promotion->save()) {
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
