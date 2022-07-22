<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Models\Receipt;
use App\Containers\AppSection\Receipt\Tasks\UpdateReceiptTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateReceiptAction extends Action
{
    public function run(Request $request): Receipt
    {
        $data = [
            // add your request data here
            'customer_id' => $request->customer_id,
            'receipt_number' => $request->receipt_number,
            'date' => $request->date,
            'paymentOf' => $request->paymentOf,
            'amount' => $request->amount,
            'type' => $request->type,
            'no' => $request->no,
            'customer_info' => json_encode($request->customer_info),
            'signature' => $request->signature,
            'business_id' => $request->business_id,
            'status' => $request->status,
            'receipt_note' => $request->receipt_note
        ];

        return app(UpdateReceiptTask::class)->run($request->id, $data);
    }
}
