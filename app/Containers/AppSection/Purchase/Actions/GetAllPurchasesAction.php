<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Tasks\GetAllPurchasesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllPurchasesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllPurchasesTask::class)->addRequestCriteria()->run();
    }
}
