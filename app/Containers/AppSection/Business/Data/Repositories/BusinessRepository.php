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
        'name' => 'like',
        'phone_number1' => 'like',
        'phone_number2' => 'like',
        'email' => 'like',
        'aba_name'
    ];
}
