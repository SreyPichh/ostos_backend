<?php

namespace App\Containers\AppSection\Products\Tasks;

use App\Containers\AppSection\Products\Data\Repositories\ProductsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteProductsTask extends Task
{
    protected ProductsRepository $repository;

    public function __construct(ProductsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
