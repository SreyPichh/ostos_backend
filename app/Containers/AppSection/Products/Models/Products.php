<?php

namespace App\Containers\AppSection\Products\Models;

use App\Ship\Parents\Models\Model;

class Products extends Model
{
    protected $fillable = [
        'name',
        'business_id',
        'price',
        'description'
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

    public function users()
    {
        return $this->belongsTo(User::class, 'product_id', 'id');
    }
    public function invoice()
    {
       return $this->belongsTo(Invoice::class, 'product_id', 'id');
    }
    public function business()
    {   
        return $this->belongsTo(Business::class, 'product_id', 'id');
    }
}
