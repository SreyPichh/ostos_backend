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
        $data =[
            // add your request data here
            'invoice_number' => $request->invoice_number,
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
//        dd($data);
//        dd(json_encode($request->employee_data));
//        $data = $request->sanitizeInput([
//            // add your request data here
//            'invoice_number' => $request->invoice_number,
//            'type'=> $request->type,
//            'date' => $request->date,
//            'due_amount' => $request->due_amount,
//            'employee_data' => json_encode($request->employee_data),
//            'business_id' => $request->business_id,
//            'product_data' => json_encode($request->product_data),
//            'customer_name' => $request->customer_name,
//            'customer_email' => $request->customer_email,
//            'customer_phone_number' => $request->customer_phone_number,
//            'customer_address1' => $request->customer_address1,
//            'customer_address2' => $request->customer_address2,
//            'status' => $request->status,
//            'total' => $request->total
//        ]);
        return app(CreateInvoiceTask::class)->run($data);
    }
}
