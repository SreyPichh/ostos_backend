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
        // ...
    ];
}
