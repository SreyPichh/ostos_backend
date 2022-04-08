<?php

namespace App\Containers\AppSection\Products\Tasks;

use App\Containers\AppSection\Products\Data\Repositories\ProductsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindProductsByIdTask extends Task
{
    protected ProductsRepository $repository;

    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
