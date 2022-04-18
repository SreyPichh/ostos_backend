<?php

namespace App\Containers\AppSection\Products\Models;

use App\Ship\Parents\Models\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'price'
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
    protected string $resourceKey = 'Products';

    public function business()
    {
        return $this->belongsTo(Business::class, 'product_id', 'id');
    }
}
