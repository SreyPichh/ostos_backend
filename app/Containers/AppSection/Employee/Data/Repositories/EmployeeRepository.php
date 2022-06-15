<?php

namespace App\Containers\AppSection\Employee\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class EmployeeRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
