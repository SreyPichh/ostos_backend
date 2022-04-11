<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Invoice\Tasks\UpdateInvoiceTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateInvoiceAction extends Action
{
    public function run(Request $request): Invoice
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'invoice_number',
            'employee_id',
            'business_id',
            'product_id',
            'price',
            'status',
            'Total',
        ]);

        return app(UpdateInvoiceTask::class)->run($request->id, $data);
    }
}
