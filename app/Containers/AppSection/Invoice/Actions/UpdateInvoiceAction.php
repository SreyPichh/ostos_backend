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
        $data =[
            // add your request data here
            'invoice_number' => $request->invoice_number,
            'business_id' => $request->business_id,
            'customer_id' => $request->customer_id,
            'po' => $request->po,
            'date' => $request->date,
            'due_amount' => $request->due_amount,
            'employee_data' => json_encode($request->employee_data),
            'product_data' => json_encode($request->product_data),
            'sample_img' => $request->sample_img,
            'invoice_note' => $request->invoice_note,
            'signature' => $request->signature,
            'status' => $request->status,
            'total' => $request->total
        ];

        return app(UpdateInvoiceTask::class)->run($request->id, $data);
    }
}
