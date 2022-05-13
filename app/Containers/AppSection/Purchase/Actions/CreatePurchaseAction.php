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
        $data = $request->sanitizeInput([
            // add your request data here
            'supplier' => $request->supplier,
            'description' => $request->description,
            'total_unit' => $request->total_unit,
            'status' => $request->status,
            'total' => $request->total
        ]);

        return app(CreatePurchaseTask::class)->run($data);
    }
}
