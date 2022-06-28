<?php

namespace App\Containers\AppSection\Invoice\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class InvoiceRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'business_id',
        'date',
        'po' => 'like',
        'customer_phone_number' => 'like',
        'invoice_number' => 'like',
        'customer_name' => 'like',
        'status',
        'customer_id'
    ];
}
