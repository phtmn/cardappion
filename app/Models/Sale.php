<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Sale extends Model
{
    use TenantTrait;

    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
        $model->uuid = (string) Uuid::generate(4);
        });
    }

    protected $fillable = [
        'uuid',
        'tenant_id',
        'name',
        'whatsapp',
        'telegram',
        'zipcode',
        'address',
        'neighborhood',   
        'city',
        'num',
        'obs', 
        'payment',
        'total',
        'delivery',
        'change',
        'delivered',
        'status'
    ];

    protected $casts = [
        'boolean' => 'delivered'
    ];


    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function items()
    {
        return $this->hasMany(Itens::class);
    }


    public function getPaymentNameAttribute()
    {
        switch ($this->payment):
            case 1:
                $label = 'Cartão de Crédito';
            break;
            case 2:
                $label = 'Cartão de Débito';
            break;
            case 3:
                $label = 'Dinheiro';
            break;
        endswitch;

        return $label;
    }

    public function getStatusNameAttribute()
    {
        switch ($this->status):
            case 1:
                $label = 'Novo';
            break;
            case 2:
                $label = 'Entregue';
            break;
            case 3:
                $label = 'Cancelado';
            break;
        endswitch;

        return $label;
    }


    public function setWhatsappAttribute($input)
    {
        if ($input)
        $this->attributes['whatsapp'] = preg_replace('/\D/', '', $input);
    }

    public function setTelegramAttribute($input)
    {
        if ($input)
        $this->attributes['telegram'] = preg_replace('/\D/', '', $input);
    }


    public function setChangeAttribute($input)
    {
        if ($input)
        $this->attributes['change'] = str_replace(['.', ','], ['', '.'], $input);
    }


    public function getWhatsappMaskedAttribute()
    {
        return $this->maskPhone($this->whatsapp);
    }

    public function getTelegramMaskedAttribute()
    {
        return $this->maskPhone($this->telegram);
    }

    public function getDeliveryMaskedAttribute()
    {
        return ($this->delivery) ? str_replace(['.'], [','], $this->delivery) : '0,00';
    }

    public function getTotalMaskedAttribute()
    {
        return str_replace(['.'], [','], $this->total);
    }

    public function getChangeMaskedAttribute()
    {
        return ($this->change) ? str_replace(['.'], [','], $this->change) : '0,00';
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
        $phone = $this->mask('(##) ####-####', $phone);
        elseif (strlen($phone) === 11) :
        $phone = $this->mask('(##) #####-####', $phone);
        endif;

        return $phone;
    }

    function invoice()
    {
        $record = $this->latest()->first();
        if ($record) {
            $expNum = explode('-', $record->invoice_number);
        } else {
            $expNum[1] = '000000';
        }

        return $invoice_number = date('Y').'-'.sprintf("%06d", $expNum[1]+1);
    }

}
