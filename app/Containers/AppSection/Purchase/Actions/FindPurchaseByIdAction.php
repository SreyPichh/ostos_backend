<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Models\Purchase;
use App\Containers\AppSection\Purchase\Tasks\FindPurchaseByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindPurchaseByIdAction extends Action
{
    public function run(Request $request): Purchase
    {
        return app(FindPurchaseByIdTask::class)->run($request->id);
    }
}
