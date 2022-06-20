<?php

namespace App\Containers\AppSection\Quote\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class QuoteRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
