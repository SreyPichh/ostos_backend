<?php

namespace App\Containers\AppSection\Invoice\Actions;

use App\Containers\AppSection\Invoice\Models\Invoice;
use App\Containers\AppSection\Invoice\Tasks\CreateInvoiceTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Auth;

class CreateInvoiceAction extends Action
{
    public function run(Request $request): Invoice
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'employee_id' => Auth::user()->id,
            'invoice_number' => $request->invoice_number,
            'employee_id' => $request->employee_id,
            'business_id' => $request->business_id,
            'product_id' => $request->product_id,
            'price' => $request->price,
            'status' => $request->status,
            'Total' => $request->Total,
        ]);

        return app(CreateInvoiceTask::class)->run($data);
    }
}
