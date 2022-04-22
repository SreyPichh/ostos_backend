<?php

namespace App\Containers\AppSection\Invoice\Models;

use App\Ship\Parents\Models\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number',
        'type',
        'date',
        'due_amount',
        'employee_data',
        'business_id',
        'product_data',
        'customer_name',
        'customer_email',
        'customer_phone_number',
        'customer_address1',
        'customer_address2',
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
    protected string $resourceKey = 'Invoice';


    public function business()
    {
        return $this->belongsTo(Business::class, 'invoice_id', 'id');
    }

}
