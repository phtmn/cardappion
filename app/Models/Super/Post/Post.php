<?php

namespace App\Models\Super\Post;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
  use Sluggable;

  protected $fillable = [
    'category',
    'image',
    'slug',
    'title',
    'subtitle',
    'body',
    'active'
  ];

  protected $casts = [
    'active' => 'boolean'
  ];

  /**
   * Sluggable configuration
   */
  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }

  /**
   * Scopes
   */
  public function scopeActived($query)
  {
    return $query->where('active', true);
  }
}
