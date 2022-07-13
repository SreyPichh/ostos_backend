<?php

namespace App\Containers\AppSection\Quote\Models;

use App\Ship\Parents\Models\Model;

class Quote extends Model
{
    protected $fillable = [
        'quote_number',
        'business_id',
        'customer_id',
        'po',
        'date',
        'due_amount',
        'employee_data',
        'product_data',
        'sample_img',
        'quote_note',
        'signature',
        'status',
        'total',
        'customer_info'

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

    public function business()
    {
        return $this->belongsTo(Business::class, 'quote_id', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'quote_id', 'id');
    }
}
