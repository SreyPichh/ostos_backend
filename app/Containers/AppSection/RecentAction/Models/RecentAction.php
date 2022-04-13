<?php

namespace App\Containers\AppSection\RecentAction\Models;

use App\Ship\Parents\Models\Model;

class RecentAction extends Model
{
    protected $fillable = [
        'action_id',
        'type_action',
        'action_label'
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
    protected string $resourceKey = 'RecentAction';
}
