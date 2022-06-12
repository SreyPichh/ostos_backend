<?php

namespace App\Containers\AppSection\NotedBook\Models;

use App\Ship\Parents\Models\Model;

class NotedBook extends Model
{
    protected $fillable = [
        'description',
        'title'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'NotedBook';
}
