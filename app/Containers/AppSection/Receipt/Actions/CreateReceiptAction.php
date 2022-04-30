<?php

namespace App\Containers\AppSection\Receipt\Actions;

use App\Containers\AppSection\Receipt\Models\Receipt;
use App\Containers\AppSection\Receipt\Tasks\CreateReceiptTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateReceiptAction extends Action
{
    public function run(Request $request): Receipt
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'date' => $request->date,
            'received_from' => $request->received_from,
            'sumOf' => $request->sumOf,
            'paymentOf' => $request->paymentOf,
            'amount' => $request->amount,
            'type' => $request->type
        ]);

        return app(CreateReceiptTask::class)->run($data);
    }
}
