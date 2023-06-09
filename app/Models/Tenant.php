<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;
use App\Models\Promotion;

class Tenant extends Model
{
  protected $fillable = ['name', 'uuid', 'token', 'plan'];

  protected $casts = [
    'boolean' => 'active',
    'boolean' => 'plan'
  ];

  public static function boot()
  {
    parent::boot(); // TODO: Change the autogenerated stub

    self::creating(function ($model) {
      $model->uuid = (string) Uuid::generate(4);
    });
  }

  public function users()
  {
    return $this->hasMany(User::class);
  }

  public function config()
  {
    return $this->hasOne(Config::class);
  }

  public function menus()
  {
    return $this->hasMany(Menu::class);
  }

  public function promotions()
  {
    return $this->hasMany(Promotion::class);
  }

  public function products()
  {
    return $this->hasMany(Product::class);
  }

  public function sales()
  {
    return $this->hasMany(Sale::class);
  }

  // Accesors
  public function getUrlTokenAttribute()
  {
    return route('site.menu.show', ['token' => $this->token]);
  }
}
