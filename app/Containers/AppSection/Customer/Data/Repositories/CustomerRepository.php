<?php

namespace App\Containers\AppSection\Customer\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class CustomerRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'customer_name' => 'like',
        'customer_phone_number',
        'customer_phone_number_2',
        'customer_address1' => 'like'
    ];
}
