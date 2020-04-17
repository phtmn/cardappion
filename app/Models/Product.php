<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use TenantTrait;

  protected $fillable = ['tenant_id', 'title', 'image1', 'image2', 'image3','price', 'details', 'nutritional_value', 'origin_inputs', 'serving_suggestion', 'linked_revenue', 'service_suggestion', 'harmonization','curiosities','active'];

  protected $casts = [
    'active' => 'boolean'
  ];

  public function menu()
  {
    return $this->belongsToMany(Menu::class, 'products_categories', 'menu_id', 'product_id');
  }



  public function setPriceAttribute($input)
  {
    if ($input)
      $this->attributes['price'] = str_replace(['.', ',', 'R$'], ['', '.', ''], $input);
  }

  public function getPriceMaskedAttribute()
  {
      return 'R$ ' . str_replace(['.'], [','], $this->price);
  }
}
