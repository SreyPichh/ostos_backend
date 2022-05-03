<?php

namespace App\Containers\AppSection\Invoice\Tasks;

use App\Containers\AppSection\Business\Data\Repositories\BusinessRepository;
use App\Containers\AppSection\Invoice\Data\Repositories\InvoiceRepository;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;

class GetLastIdTask extends Task
{
    protected InvoiceRepository $repository;
    public function __construct(InvoiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->orderBy('id', 'desc')->first();
    }
}
