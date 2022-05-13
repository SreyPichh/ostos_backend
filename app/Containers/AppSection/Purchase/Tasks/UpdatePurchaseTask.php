<?php

namespace App\Containers\AppSection\Purchase\Tasks;

use App\Containers\AppSection\Purchase\Data\Repositories\PurchaseRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdatePurchaseTask extends Task
{
    protected PurchaseRepository $repository;

    public function __construct(PurchaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
