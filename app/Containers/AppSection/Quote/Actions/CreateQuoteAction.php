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
            'quote_number' => $request->quote_number,
            'date' => $request->date,
            'due_amount' => $request->due_amount,
            'business_id' => $request->business_id,
            'product_data' => json_encode($request->product_data),
            'po' => json_encode($request->po),
            'sample_img' => $request->sample_img,
            'signature' => $request->signature,
            'status' => $request->status,
            'total' => $request->total
        ];

        return app(CreateQuoteTask::class)->run($data);
    }
}
