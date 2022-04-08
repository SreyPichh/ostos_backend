<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Invoice\Tasks\FindInvoiceByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindInvoiceByIdAction extends Action
{
    public function run(Request $request): Invoice
    {
        return app(FindInvoiceByIdTask::class)->run($request->id);
    }
}
