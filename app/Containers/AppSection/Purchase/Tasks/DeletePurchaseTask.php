<?php

namespace App\Containers\AppSection\Purchase\Tasks;

use App\Containers\AppSection\Purchase\Data\Repositories\PurchaseRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeletePurchaseTask extends Task
{
    protected PurchaseRepository $repository;

    public function __construct(PurchaseRepository $repository)
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
