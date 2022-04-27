<?php

namespace App\Containers\AppSection\Products\Tasks;

use App\Containers\AppSection\Products\Data\Repositories\ProductsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllFilterProductsTask extends Task
{
    protected ProductsRepository $repository;

    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($business_id)
    {
        return $this->repository->paginate();
    }
}
