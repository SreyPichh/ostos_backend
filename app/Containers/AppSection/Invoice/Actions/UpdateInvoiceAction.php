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
        $data = [
            'invoice_number' => $request->invoice_number,
            'type'=> $request->type,
            'date' => $request->date,
            'due_amount' => $request->due_amount,
            'employee_data' => json_encode($request->employee_data),
            'business_id' => $request->business_id,
            'product_data' => json_encode($request->product_data),
            'customer_name' => $request->customer_name,
            'customer_email' => $request->customer_email,
            'customer_phone_number' => $request->customer_phone_number,
            'customer_phone_number_2' => $request->customer_phone_number_2,
            'customer_address1' => $request->customer_address1,
            'customer_address2' => $request->customer_address2,
            'sample_img' => $request->sample_img,
            'invoice_note' => $request->invoice_note,
            'signature' => $request->signature,
            'status' => $request->status,
            'total' => $request->total
        ];
        return app(UpdateInvoiceTask::class)->run($request->id, $data);
    }
}
