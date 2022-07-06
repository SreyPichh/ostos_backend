<?php

namespace App\Containers\AppSection\Receipt\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ReceiptRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'date',
        'paymentOf',
        'type',
        'customer_info' => 'like',
        'status',
        'business_id'
    ];
}
