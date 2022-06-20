<?php

namespace App\Containers\AppSection\Quote\Actions;

use App\Containers\AppSection\Quote\Models\Quote;
use App\Containers\AppSection\Quote\Tasks\UpdateQuoteTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateQuoteAction extends Action
{
    public function run(Request $request): Quote
    {
        $data = [
            // add your request data here
            'quote_number' => $request->quote_number,
            'date' => $request->date,
            'due_amount' => $request->due_amount,
            'business_id' => $request->business_id,
            'product_data' => json_encode($request->product_data),
            'sample_img' => $request->sample_img,
            'signature' => $request->signature,
            'status' => $request->status,
            'total' => $request->total
        ];

        return app(UpdateQuoteTask::class)->run($request->id, $data);
    }
}
