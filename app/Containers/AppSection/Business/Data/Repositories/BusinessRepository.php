<?php

namespace App\Containers\AppSection\Business\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class BusinessRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name',
        'phone_number1',
        'phone_number2',
        'email',
        'aba_name'
    ];
}
