<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
  use TenantTrait;

  protected $fillable = ['user_id', 'tenant_id', 'name', 'docnumber', 'zipcode', 'address', 'neighborhood', 'city', 'us', 'telephone', 'whatsapp', 'site', 'instagram', 'fanpage'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function getHalfAddressAttribute()
  {
    return $this->city . ' - ' . $this->us;
  }

  public function getFormatWhatsappAttribute()
  {
    return $this->maskPhone($this->whatsapp);
  }

  function mask($mask, $value)
  {
    for ($i = 0; $i < strlen($value); $i++) :
      $mask[strpos($mask, '#')] = $value[$i];
    endfor;

    return $mask;
  }

  function maskPhone($phone)
  {
    if (strlen($phone) === 10) :
      $phone = mask('(##) ####-####', $phone);
    elseif (strlen($phone) === 11) :
      $phone = mask('(##) #####-####', $phone);
    endif;

    return $phone;
  }
}
