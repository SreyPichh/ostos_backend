<?php

namespace App\Containers\AppSection\Products\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ProductsRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        // ...
    ];
}
