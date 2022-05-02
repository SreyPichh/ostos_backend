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
            'date' => $request->date,
            'quote_to' => $request->quote_to,
            'product_data' => json_encode($request->product_data),
            'total' => $request->total,
        ];

//        $data = $request->sanitizeInput([
//            // add your request data here
//            'date' => $request->date,
//            'quote_to' => $request->quote_to,
//            'product_data' => json_encode($request->product_data),
//            'total' => $request->total,
//        ]);

        return app(CreateQuoteTask::class)->run($data);
    }
}
