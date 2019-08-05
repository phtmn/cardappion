<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use TenantTrait;

  // protected $fillable = ['tenant_id','menu_id','category_id','description','price','image','details','active'];

  protected $fillable = ['tenant_id', 'title', 'price', 'url', 'image', 'details', 'active'];

  protected $casts = [
    'active' => 'boolean'
  ];

  public function menu()
  {

    return $this->belongsTo(Menu::class);
  }

  public function category()
  {

    return $this->belongsTo(ProductCategory::class);
  }
}
