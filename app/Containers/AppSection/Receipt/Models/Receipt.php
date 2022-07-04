<?php

namespace App\Containers\AppSection\Receipt\Models;

use App\Ship\Parents\Models\Model;

class Receipt extends Model
{
    protected $fillable = [
        'date',
        'paymentOf',
        'amount',
        'type',
        'no',
        'customer_info',
        'signature'
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
        'date'
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Receipt';
}
