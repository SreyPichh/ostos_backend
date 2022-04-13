<?php

namespace App\Containers\AppSection\RecentAction\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class RecentActionRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
