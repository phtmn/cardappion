<?php

namespace App\Models;


use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use TenantTrait;

    protected $fillable = ['user_id','tenant_id','name','docnumber','zipcode','address','neighborhood','city','us','telephone','whatsapp','site','instagram','fanpage'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}