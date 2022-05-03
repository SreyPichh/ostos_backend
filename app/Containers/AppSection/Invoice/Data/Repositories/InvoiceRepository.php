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
        'customer_phone_number',
        'invoice_number',
        'customer_name'
    ];
}
