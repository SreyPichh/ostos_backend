<?php

namespace App\Containers\AppSection\Customer\Models;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Ship\Parents\Models\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_company',
        'po',
        'customer_phone_number',
        'customer_phone_number_2',
        'gender',
        'status',
        'customer_address1',
        'customer_address2',
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
    protected string $resourceKey = 'Customer';

    public function invoice()
    {
        return $this->hasMany(Invoice::class, 'customer_id', 'id');
    }
}
