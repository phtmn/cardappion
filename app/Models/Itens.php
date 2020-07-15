<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $fillable = [
        'tenant_id',
        'sale_id',
        'product_id',
        'price',
        'quantity',
    ];

    protected $table = 'sale_itens';


    /**
     * Relationship
     */
    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function product()
    {
      return $this->belongsTo(Product::class, 'product_id');
    }


    public function setDeliveryAttribute($input)
    {
        if ($input)
        $this->attributes['delivery'] = str_replace(['.', ',', 'R$'], ['', '.', ''], $input);
    }

    public function setTotalAttribute($input)
    {
        if ($input)
        $this->attributes['total'] = str_replace(['.', ',', 'R$'], ['', '.', ''], $input);
    }

    public function setChangeAttribute($input)
    {
        if ($input)
        $this->attributes['change'] = str_replace(['.', ',', 'R$'], ['', '.', ''], $input);
    }


    public function getWhatsappMaskedAttribute()
    {
        return $this->maskPhone($this->whatsapp);
    }

    public function getDeliveryMaskedAttribute()
    {
        return str_replace(['.'], [','], $this->delivery);
    }

    public function getTotalMaskedAttribute()
    {
        return str_replace(['.'], [','], $this->total);
    }

    public function getChangeMaskedAttribute()
    {
        return str_replace(['.'], [','], $this->change);
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
