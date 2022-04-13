<?php

namespace App\Containers\AppSection\Invoice\Tasks;

use App\Containers\AppSection\Invoice\Data\Repositories\InvoiceRepository;
use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Ship\Parents\Requests\Request;
use App\Ship\Parents\Tasks\Task;

class GetAllInvoicesTask extends Task
{
    protected InvoiceRepository $repository;

    public function __construct(InvoiceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(Request $request)
    {
        $business_id = $request->business_id;
        $status = $request->status;
        if(empty($business_id) and empty($status))
        {
            return $this->repository->paginate();
        }
        $query = Invoice::query();
        if(!empty($business_id))
        {
            $query = $query->where('business_id', $business_id);
        }
        if(!empty($status))
        {
            $query = $query->where('status', $status);
        }
        return $query->get();
    }
}
