<?php

namespace App\Containers\AppSection\Purchase\Actions;

use App\Containers\AppSection\Purchase\Tasks\GetLastIdPurchasesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetLastIdPurchasesAction extends Action
{
    public function run(Request $request)
    {
        // $var = app(Task::class)->run($arg1, $arg2);
        return app(GetLastIdPurchasesTask::class)->addRequestCriteria()->run($request);
    }
}
