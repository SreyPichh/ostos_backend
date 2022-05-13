<?php

namespace App\Containers\AppSection\NotedBook\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class NotedBookRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
