<?php

namespace App\Containers\AppSection\Invoice\Models;

use App\Ship\Parents\Models\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_number',
        'employee_id',
        'business_id',
        'product_id',
        'status',
        'Total'
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

    public function user()
    {
        return $this->belongsTo(User::class, 'invoice_id', 'id');
    }
    public function business()
    {
        return $this->belongsTo(Business::class, 'invoice_id', 'id');
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'invoice_id', 'id');
    }
}
