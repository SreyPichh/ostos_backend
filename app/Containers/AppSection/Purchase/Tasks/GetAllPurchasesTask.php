<?php

namespace App\Containers\AppSection\Purchase\Tasks;

use App\Containers\AppSection\Purchase\Data\Repositories\PurchaseRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPurchasesTask extends Task
{
    protected PurchaseRepository $repository;

    public function __construct(PurchaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
