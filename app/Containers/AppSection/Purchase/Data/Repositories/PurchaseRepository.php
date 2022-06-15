<?php

namespace App\Containers\AppSection\Purchase\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class PurchaseRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'supplier' => 'like',
        'phone_number' => 'like',
        'status',
        'total',
        'date'
    ];
}
