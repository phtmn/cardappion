<?php

namespace App\Models;

use App\Observers\Tenant\TenantObserver;
use App\Scopes\Tenant\TenantScope;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{

  protected $fillable = [
    'title',
    'details',
    'slug',
    'url',
    'promotion_value',
    'expiration_date',
    'image',
    'active'
  ];

  protected $casts = [
    'active' => 'boolean'
  ];

  public static function boot()
  {
    parent::boot(); // TODO: Change the autogenerated stub

    self::addGlobalScope(new TenantScope);
    static::observe(new TenantObserver);
  }

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function tenant()
  {
    return $this->belongsTo(Tenant::class);
  }

  public function setPromotionValueAttribute($input)
  {
    if ($input)
      $this->attributes['promotion_value'] = str_replace(['.', ',', 'R$'], ['', '.', ''], $input);
  }
}
