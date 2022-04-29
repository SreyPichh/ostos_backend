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
        $data = $request->sanitizeInput([
            // add your request data here
            'date' => $request->date,
            'received_from' => $request->received_from,
            'sumOf' => $request->sumOf,
            'paymentOf' => $request->paymentOf,
            'amount' => $request->amount,
            'type' => $request->type
        ]);

        return app(CreateQuoteTask::class)->run($data);
    }
}
