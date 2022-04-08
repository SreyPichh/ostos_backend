<?php

namespace App\Containers\AppSection\Products\Tasks;

use App\Containers\AppSection\Products\Data\Repositories\ProductsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateProductsTask extends Task
{
    protected ProductsRepository $repository;

    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
