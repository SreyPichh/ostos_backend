<?php

namespace App\Containers\AppSection\Receipt\Tasks;

use App\Containers\AppSection\Receipt\Data\Repositories\ReceiptRepository;
use App\Ship\Parents\Tasks\Task;

class GetLastIdReceiptTask extends Task
{
    protected ReceiptRepository $repository;

    public function __construct(ReceiptRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->orderBy('id', 'desc')->first();
    }
}
