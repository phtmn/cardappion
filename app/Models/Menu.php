<?php

namespace App\Models;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Webpatser\Uuid\Uuid;

class Menu extends Model
{
  protected $fillable = ['tenant_id', 'user_id', 'description', 'active', 'uui', 'token'];

  protected $casts = [
    'active' => 'boolean'
  ];

  public static function boot()
  {
    parent::boot(); // TODO: Change the autogenerated stub

    self::addGlobalScope(new TenantScope);
    static::observe(new TenantObserver);

    self::creating(function ($model) {
      $model->uuid = (string) Uuid::generate(4);
      $model->slug = (string) Str::slug($model->url, '_');
      $model->url  = (string) self::gerarUrl($model->url);
    });
  }

  public function products()
  {
    return $this->belongsToMany(Product::class, 'products_categories', 'menu_id', 'product_id');
  }

  public function tenant()
  {
    return $this->belongTo(Tenant::class);
  }

  public static function gerarUrl($string)
  {

    $baseUrl = env('APP_URL') . '/menu/';

    $slug = Str::slug($string, '_');

    $url = $baseUrl . $slug;

    return $url;
  }
}
