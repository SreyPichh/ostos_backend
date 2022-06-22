<?php

namespace App\Containers\AppSection\Invoice\Models;

use App\Ship\Parents\Models\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number',
        'business_id',
        'customer_id',
        'date',
        'due_amount',
        'employee_data',
        'product_data',
        'sample_img',
        'invoice_note',
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
    protected string $resourceKey = 'Invoice';

    public function business()
    {
        return $this->belongsTo(Business::class, 'invoice_id', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'invoice_id', 'id');
    }

}
