<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Models\Quote;
use App\Containers\AppSection\Quote\Tasks\CreateQuoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateQuoteAction extends Action
{
    public function run(Request $request): Quote
    {
        $data = [
            // add your request data here
            'quote_number' => $request->invoice_number,
            'business_id' => $request->business_id,
            'customer_id' => $request->customer_id,
            'po' => $request->po,
            'date' => $request->date,
            'due_amount' => $request->due_amount,
            'employee_data' => json_encode($request->employee_data),
            'product_data' => json_encode($request->product_data),
            'sample_img' => $request->sample_img,
            'quote_note' => $request->invoice_note,
            'signature' => $request->signature,
            'status' => $request->status,
            'total' => $request->total,
            'customer_info' => json_encode($request->customer_info)
        ];

        return app(CreateQuoteTask::class)->run($data);
    }
}
