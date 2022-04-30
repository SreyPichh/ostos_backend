<?php

namespace App\Containers\AppSection\Quote\Models;

use App\Ship\Parents\Models\Model;

class Quote extends Model
{
    protected $fillable = [
        'date',
        'quote_to',
        'product_data',
        'total'
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
    protected string $resourceKey = 'Quote';
}
