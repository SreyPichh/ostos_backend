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
        $data = $request->sanitizeInput([
            // add your request data here
            'date',
            'received_from',
            'sumOf',
            'paymentOf',
            'amount',
            'type'
        ]);

        return app(UpdateReceiptTask::class)->run($request->id, $data);
    }
}
