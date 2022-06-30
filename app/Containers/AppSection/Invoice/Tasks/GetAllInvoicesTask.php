<?php

namespace App\Containers\AppSection\Invoice\Tasks;

use App\Containers\AppSection\Invoice\Data\Repositories\InvoiceRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllInvoicesTask extends Task
{
    protected InvoiceRepository $repository;

    public function __construct(InvoiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
//        return $this->repository->orderBy('updated_at', 'de?sc')->paginate();
    }
}
