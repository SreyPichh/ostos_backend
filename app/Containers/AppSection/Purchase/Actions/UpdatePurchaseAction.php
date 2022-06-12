<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Models\Purchase;
use App\Containers\AppSection\Purchase\Tasks\UpdatePurchaseTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdatePurchaseAction extends Action
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
            'note'
        ];

        return app(UpdatePurchaseTask::class)->run($request->id, $data);
    }
}
