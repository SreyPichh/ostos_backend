<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Models\Purchase;
use App\Containers\AppSection\Purchase\Tasks\CreatePurchaseTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreatePurchaseAction extends Action
{
    public function run(Request $request): Purchase
    {
        $data = [
            // add your request data here
            'supplier' => $request->supplier,
            'supplier_invoice_number' => $request->supplier_invoice_number,
            'date' => $request->date,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'supplier_product_data' => json_encode($request->supplier_product_data),
            'status' => $request->status,
            'note' => $request->note,
            'due_amount' => $request->due_amount,
            'total' => $request->total
        ];

        return app(CreatePurchaseTask::class)->run($data);
    }
}
