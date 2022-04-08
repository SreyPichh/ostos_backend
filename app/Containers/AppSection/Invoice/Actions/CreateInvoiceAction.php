<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Invoice\Tasks\CreateInvoiceTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateInvoiceAction extends Action
{
    public function run(Request $request): Invoice
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateInvoiceTask::class)->run($data);
    }
}
