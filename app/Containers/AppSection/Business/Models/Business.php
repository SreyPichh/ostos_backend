<?php

namespace App\Containers\AppSection\Business\Models;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Products\Models\Products;
use App\Ship\Parents\Models\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone_number1',
        'phone_number2',
        'phone_number3',
        'email',
        'telegram',
        'aba_name',
        'acc_number',
        'qr_code',
        'invoice_toptext',
        'invoice_note',
        'personal_info',
        'quote_note',
        'digital_sign',
        'facebook_link',
        'instagram_link'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Business';


    public function product()
    {
        return $this->hasMany(Products::class,'business_id','id');
    }

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'business_id', 'id');
    }
}
