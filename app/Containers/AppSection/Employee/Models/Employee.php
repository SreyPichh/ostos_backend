<?php

namespace App\Containers\AppSection\Employee\Models;

use App\Ship\Parents\Models\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'first_address',
        'second_address',
        'phone_number',
        'national_id',
        'profile_img',
        'birth'
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
    protected string $resourceKey = 'Employee';

    public function taggables()
    {
        return $this->morphToMany(Taggable::class, 'taggable');
    }
      public function invoices()
    {
        return $this->hasMany(Invoice::class, 'invoice_id' , 'id');
    }

}
