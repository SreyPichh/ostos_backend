<?php

namespace App\Containers\AppSection\Invoice\Tasks;

use App\Containers\AppSection\Invoice\Data\Repositories\InvoiceRepository;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;

class GetAllFilterInvoicesTask extends Task
{
    protected $repository;
    public function __construct(InvoiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Request $request)
    {
        $business = $request->business_id;
        $status = $request->status;
        $date = $request->created_date;

        if ($status == 'Paid')
        {
            return $this->repository->findWhere('business_id', $business)->get();
        }
    }
}
