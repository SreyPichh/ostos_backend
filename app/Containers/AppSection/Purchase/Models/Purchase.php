<?php

namespace App\Containers\AppSection\Purchase\Models;

use App\Ship\Parents\Models\Model;

class Purchase extends Model
{
    protected $fillable = [
        'supplier',
        'supplier_invoice_number',
        'date',
        'status',
        'phone_number',
        'address',
        'supplier_product_data',
        'note',
        'due_amount',
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
    protected string $resourceKey = 'Purchase';
}
