<?php

namespace App\Containers\AppSection\Customer\Models;

use App\Ship\Parents\Models\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone_number',
        'customer_phone_number_2',
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
}
