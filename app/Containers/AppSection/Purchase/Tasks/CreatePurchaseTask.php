<?php

namespace App\Containers\AppSection\Purchase\Tasks;

use App\Containers\AppSection\Purchase\Data\Repositories\PurchaseRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePurchaseTask extends Task
{
    protected PurchaseRepository $repository;

    public function __construct(PurchaseRepository $repository)
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
