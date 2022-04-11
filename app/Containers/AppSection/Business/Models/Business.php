<?php

namespace App\Containers\AppSection\Business\Models;

use App\Ship\Parents\Models\Model;

class Business extends Model
{
    protected $fillable = [
        'name',
        'logo',
        'address',
        'phone_number',
        'email',
        'aba_name',
        'acc_number',
        'qr_code',
        'invoice_toptext',
        'invoice_note',
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
        return $this->hasMany(Product::class, 'business_id', 'id');
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'business_id', 'id');
    }
}
