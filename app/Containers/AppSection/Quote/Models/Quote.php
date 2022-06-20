<?php

namespace App\Containers\AppSection\Quote\Models;

use App\Ship\Parents\Models\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote_number',
        'date',
        'due_amount',
        'business_id',
        'product_data',
        'sample_img',
        'signature',
        'status',
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
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Quote';
}
