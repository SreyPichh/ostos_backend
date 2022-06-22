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
        $data =[
            // add your request data here
            'invoice_number' => $request->invoice_number,
            'business_id' => $request->business_id,
            'customer_id' => $request->customer_id,
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
//        dd($data);
        return app(CreateInvoiceTask::class)->run($data);
    }
}
