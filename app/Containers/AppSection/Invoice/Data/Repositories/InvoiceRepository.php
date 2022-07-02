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
        'customer_info' => 'like',
        'invoice_number' => 'like',
        'status',
        'customer_id'
    ];
}
