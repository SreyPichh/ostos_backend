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
        $data = $request->sanitizeInput([
            // add your request data here
            'supplier',
            'description',
            'total_unit',
            'status',
            'total'
        ]);

        return app(UpdatePurchaseTask::class)->run($request->id, $data);
    }
}
